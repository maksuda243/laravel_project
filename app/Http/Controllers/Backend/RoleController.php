<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Role\AddNewRequest;
use App\Http\Requests\Backend\Role\UpdateRequest;

class RoleController extends Controller
{
   
    public function index()
    {
        $data=Role::paginate(10);
        return view('backend.role.index',compact('data'));
    }

    public function create()
    {
        return view('backend.role.create');
    }

    public function store(AddNewRequest $request)
    {
        try{
            $data=new Role();
            $data->name=$request->Name;
            $data->identity=$request->Identity;
            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('role.index');
            }
        }catch(Exception $e){
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $role=Role::findOrFail(encryptor('decrypt',$id));
        return view('backend.role.edit',compact('role'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try{
            $data=Role::findOrFail(encryptor('decrypt',$id));
            $data->name=$request->Name;
            $data->identity=$request->Identity;
            if($data->save()){
                $this->notice::success('Successfully updated');
                return redirect()->route('role.index');
            }
        }catch(Exception $e){
            $this->notice::error('Please try again');
            //dd($e);
            return redirect()->back()->withInput();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= Role::findOrFail(encryptor('decrypt',$id));
        if($data->delete()){
            $this->notice::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
