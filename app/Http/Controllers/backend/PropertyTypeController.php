<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PropertyType;

class PropertyTypeController extends Controller
{
    public function AllType(){
        $types = PropertyType::latest()->get();
        return view('backend.type.all_type',compact('types'));
    }

    public function AddType(){
        return view('backend.type.add_type');
    }

    public function RestoreType(Request $request){
        $request->validate([
            'type_name' => 'required|unique:property_types|max:200',
            'type_icon' => 'required'
        ]);
        PropertyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon
        ]);

        $notification = array(
            'message' => 'Property Type added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.type')->with($notification);

    }

    public function EditType($id){
        $types = PropertyType::findOrFail($id);
        return view('backend.type.edit_type',compact('types'));
    }

    public function UpdateType(Request $request){
        $pid = $request->id;
        PropertyType::findOrFail($pid)->update([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon
        ]);

        $notification = array(
            'message' => 'Property Type updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.type')->with($notification);
    }

    public function DeleteType($id){
        PropertyType::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
