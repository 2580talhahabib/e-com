<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
 public function index(){
        $data['colors']=Color::get();
        return view('admin.Color.index',$data);
    }
       public function create(){
        return view('admin.Color.create');
        
    }
        public function store(Request $req){
                 
        $req->validate([
            'color'=>'required|unique:colors',
        ]);
   
        Color::create([
            'color'=>$req->color,
             'status'=>$req->status,
        ]);
        return redirect()->route('color.index')->with('success','Color Created Successfully');
    }
       public function edit($id){
        $edit=Color::find($id);
        return view('admin.Color.update',compact('edit'));
    }
       public function update(Request $req,$id){
        $update=Color::find($id);
       
    $update->update([
         'color'=>$req->color,
             'status'=>$req->status,
        ]);
        return redirect()->route('color.index')->with('success','Color Updated Successfully');
        
    }
       public function destroy($id){
         $destroy=Color::find($id);
         if($destroy == null){
            return redirect()->route('color.index')->with('danger','Color Not Found');
         }else{
            $destroy->delete();
            return redirect()->route('color.index')->with('success','Color Deleted Successfully');

         }

    }
}