<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use DB;
class RolePermissionController extends Controller
{
    public function AddRolePermission(){
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_group = User::getPermissionGroup();
        return view('backend.pages.usersetup.add_role_permission',compact('roles','permissions','permission_group'));
    }

   

    public function StoreRolePermission(Request $request){
        $data = array();
        $permissions = $request->permission;
        foreach($permissions as $key=>$item){
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;
            DB::table('role_has_permissions')->insert($data);
        }
       
        $notification = array(
            'message' => 'Role permission added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles.permission')->with($notification);
    }

    public function AllRolePermission(){
        $roles = Role::all();
        return view('backend.pages.usersetup.all_role_permission',compact('roles'));
    }

    public function EditRolePermission($id){
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $permission_group = User::getPermissionGroup();
        return view('backend.pages.usersetup.edit_role_permission',compact('role','permissions','permission_group'));
    }

}
