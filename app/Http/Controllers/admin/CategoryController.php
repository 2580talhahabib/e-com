<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['categories']=Category::get();
        return view('admin.categories.index',$data);
    }
       public function create(){
        return view('admin.categories.create');
        
    }
        public function store(Request $req){
                 
        $req->validate([
            'name'=>'required',
        ]);
   
        Category::create([
            'name'=>$req->name,
           'slug'=>str_replace(' ','-',strtolower($req->name)),
        ]);
        return redirect()->route('category.index')->with('success','Category Created Successfully');
    }
       public function edit($id){
        $edit=Category::find($id);
        return view('admin.categories.update',compact('edit'));
    }
       public function update(Request $req,$id){
        $update=Category::find($id);
        $req->validate([
            'name'=>'required',
        'slug'=>'required',  
        ]);
    $update->update([
            'name'=>$req->name,
            'slug'=>str_replace(' ','-',strtolower($req->slug)),
        ]);
        return redirect()->route('category.index')->with('success','Category Updated Successfully');
        
    }
       public function destroy($id){
         $destroy=Category::find($id);
         if($destroy == null){
            return redirect()->route('category.index')->with('danger','Category Not Found');
         }else{
            $destroy->delete();
            return redirect()->route('category.index')->with('success','Category Deleted Successfully');

         }

    }
}