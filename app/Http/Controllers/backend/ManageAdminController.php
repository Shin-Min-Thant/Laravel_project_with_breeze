<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class ManageAdminController extends Controller
{
    public function allAdmin(){
        $users = User::where('role','admin')->get();
        return view('backend.pages.Amanage.all_admin',compact('users'));
    }

    public function addAmin(){
        $roles = Role::all();
        return view('backend.pages.Amanage.add_admin',compact('roles'));
    }

    public function storeAdmin(Request $request){
    $user = new User();
    $user->name = $request->name;
    $user->username=$request->username;
    $user->email=$request->email;
    $user->address=$request->address;
    $user->phone=$request->phone;
    $user->password=Hash::make($request->password);
    $user->status='active';
    $user->role='admin';
    $user->save();

        if($request->roles){
            $user->assignRole($request->roles);
        }
        $notification = array(
            'message' => 'Admin Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);
    }

    public function editAdmin($id){
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('backend.pages.Amanage.edit_admin',compact('user','roles'));
    }

    public function updateAdmin(Request $request,$id){
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->phone=$request->phone;
        $user->status='active';
        $user->role='admin';
        $user->save();
        $user->roles()->detach();
        if($request->roles){
            $user->assignRole($request->roles);
        }
        $notification = array(
            'message' => 'Admin Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);
    }

    public function deleteAdmin($id){
        $user = User::findOrFail($id);
        if(!is_null($user)){
            $user->delete();
        }
        $notification = array(
            'message' => 'Admin Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.admin')->with($notification);
    }


}
