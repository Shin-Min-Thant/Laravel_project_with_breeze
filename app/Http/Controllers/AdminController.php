<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin(){
        return view('admin.login_dashboard');
    }

    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));
    }

    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email= $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = uniqid() . $file->getClientOriginalName();
            $file->move(public_path('uploads/admin_imgs/'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin Update Successfully',
            'alert-type' => 'Success'
        );

        return redirect()->back()->with($notification);
    }
}
