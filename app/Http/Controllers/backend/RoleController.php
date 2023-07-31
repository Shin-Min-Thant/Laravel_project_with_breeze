<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function AllRoles(){
        $roles = Role::all();
        return view('backend.pages.roles.all_roles',compact('roles'));
    }

    public function AddRole(){
        return view('backend.pages.roles.add_role');
    }

    public function ResotreRole(Request $request){
            $request->validate([
            'name' => 'required'
        ]);
        Role::create([
            'name' => $request->name
        ]);
        $notification = array(
            'message' => 'Role Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    }

    public function EditRole($id){
        $roles = Role::findOrFail($id);
        return view('backend.pages.roles.edit_role',compact('roles'));
    }

    public function UpdateRole(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        $rid = $request->id;
        Role::findOrFail($rid)->update([
            'name' => $request->name
        ]);
        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    }

    public function DeleteRole($id){
        Role::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    }
}
