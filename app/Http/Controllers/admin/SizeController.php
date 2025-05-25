<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
     public function index(){
        $data['sizes']=Size::get();
        return view('admin.Size.index',$data);
    }
       public function create(){
        return view('admin.Size.create');
        
    }
        public function store(Request $req){
                 
        $req->validate([
            'size'=>'required',
        ]);
   
        Size::create([
            'size'=>$req->size,
             'status'=>$req->status,
        ]);
        return redirect()->route('size.index')->with('success','Size Created Successfully');
    }
       public function edit($id){
        $edit=Size::find($id);
        return view('admin.Size.update',compact('edit'));
    }
       public function update(Request $req,$id){
        $update=Size::find($id);
   
    $update->update([
         'size'=>$req->size,
             'status'=>$req->status,
        ]);
        return redirect()->route('size.index')->with('success','Size Updated Successfully');
        
    }
       public function destroy($id){
         $destroy=Size::find($id);
         if($destroy == null){
            return redirect()->route('size.index')->with('danger','Size Not Found');
         }else{
            $destroy->delete();
            return redirect()->route('size.index')->with('success','Size Deleted Successfully');

         }

    }
}