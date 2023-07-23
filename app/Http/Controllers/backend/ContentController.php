<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function AllContent(){
        $contents = Content::latest()->get();
        return view('backend.content.all_content',compact('contents'));
    }

    public function AddContent(){
        return view('backend.content.add_content');
    }

    public function ResotreContent(Request $request){
        Content::insert([
            'title' => $request->title,
            'description' => $request->description
        ]);
        $notification = array(
            'message' => 'Content Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.content')->with($notification);

    }

    public function EditContent($id){
        $contents = Content::findOrFail($id);
        return view('backend.content.edit_content',compact('contents'));
    }

    public function UpdateContent(Request $request){
        $pid = $request->id;
        Content::findOrFail($pid)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        $notification = array(
            'message' => 'Content updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.content')->with($notification);
    }

    public function DeleteContent($id){
        Content::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.content')->with($notification);
    }
}
