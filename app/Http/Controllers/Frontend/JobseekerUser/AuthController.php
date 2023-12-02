<?php

namespace App\Http\Controllers\Frontend\JobseekerUser;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\JobseekerUser;
use App\Http\Requests\JobseekerUser\Auth\SignupRequest;
use App\Http\Requests\JobseekerUser\Auth\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Toastr;
use Exception;

class AuthController extends Controller
{
    public function signUpForm(){
        return view('jobseekeruser.auth.register');
    }

    public function signUpStore(SignupRequest $request){
        try{
            $user=new JobseekerUser;
            $user->name=$request->name;
            $user->contact_no=$request->contact_no;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            if($user->save())
                return redirect('jobseekeruser/login')->with('success','Successfully Registred');
        }catch(Exception $e){
            dd($e);
            return redirect('jobseekeruser/login')->with('danger','Please try again');;
        }

    }

    public function signInForm(){
        return view('jobseekeruser.auth.login');
    }

    public function signInCheck(SigninRequest $request){
        try{
            $user=JobseekerUser::where('contact_no',$request->username)
                        ->orWhere('email',$request->username)->first();
            if($user){
                if($user->status==1){
                    if(Hash::check($request->password , $user->password)){
                        $this->setSession($user);
                        return redirect()->route('jobseekeruserdashboard')->with('success','Successfully login');
                    }else
                        return redirect()->route('jobseeekruser.login')->with('error','Your phone number or password is wrong!');
                }else
                    return redirect()->route('jobseekeruser.login')->with('error','You are not active user. Please contact to authority!');
            }else
                return redirect()->route('jobseekeruser.login')->with('error','Your phone number or password is wrong!');
        }catch(Exception $e){
            dd($e);
            return redirect()->route('jobseekeruser.login')->with('error','Your phone number or password is wrong!');
        }
    }

    public function setSession($user){
        return request()->session()->put([
                'userId'=>encryptor('encrypt',$user->id),
                'userName'=>encryptor('encrypt',$user->name),
                'email'=>encryptor('encrypt',$user->email),
                'contactNo'=>encryptor('encrypt',$user->contact_no),
                'image'=>$user->image ?? 'no-image.png'
            ]
        );
    }

    public function singOut(){
        request()->session()->flush();
        return redirect('jobseekeruser/login')->with('danger','Succfully Logged Out');
    }
}
