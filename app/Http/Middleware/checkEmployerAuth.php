<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\EmployerUser; // custome
use Illuminate\Http\Request;
use Session; // custome

class checkEmployerAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       //echo $request->route()->getName();
            //die();
        if(!Session::has('userId') || Session::has('userId')==null){
            return redirect()->route('logOut');
        }else{
            $user=EmployerUser::where('status',1)->where('id',currentUserId())->first();
            if(!$user)
                return redirect()->route('logOut');
            else
                return $next($request);
        }
        return redirect()->route('logOut');
    }
}
