<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    public function index(){
        $data['brands']=Brand::get();
        return view('admin.Brands.index',$data);
    }
       public function create(){
        return view('admin.Brands.create');
        
    }
        public function store(Request $req){
                 
        $req->validate([
            'name'=>'required',
        ]);
        if($req->has('image')){
            $image=$req->image;
             $ext = $image->getClientOriginalExtension();
             $path=time().uniqid().'.'.$ext;
            $image->move(public_path('uploads/Brands'), $path);
            
        }
   
        Brand::create([
            'name'=>$req->name,
           'slug'=>str_replace(' ','-',strtolower($req->name)),
            'image'=>$path,
            'status'=>$req->status,

        ]);

        return redirect()->route('brand.index')->with('success','Brand Created Successfully');
    }
       public function edit($id){
        $edit=Brand::find($id);
        return view('admin.Brands.update',compact('edit'));
    }
       public function update(Request $req,$id){
        
        $path="";
        $update=Brand::find($id);
        $req->validate([
            'image'=>'required|image'
        ]);
        if($req->has('image')){
             if($update->image && file_exists(public_path('uploads/Brands/'.$update->image))) {
           unlink(public_path('uploads/Brands/'.$update->image)) ;
        }
            $image=$req->image;
             $ext = $image->getClientOriginalExtension();
             $path=time().uniqid().'.'.$ext;
            $image->move(public_path('uploads/Brands'), $path);
            
        }
    $update->update([
            'name'=>$req->name,
            'slug'=>str_replace(' ','-',strtolower($req->slug)),
               'image'=>$path,
               'status'=>$req->status,
        ]);
        return redirect()->route('brand.index')->with('success','Brand Updated Successfully');
        
    }
       public function destroy($id){
         $destroy=Brand::find($id);
         if($destroy == null){
            return redirect()->route('brand.index')->with('danger','Brand Not Found');
         }else{
            if($destroy->image && file_exists(public_path('uploads/Brands/'.$destroy->image))){
                File::delete(public_path('uploads/Brands/'.$destroy->image));
            }
            $destroy->delete();
            return redirect()->route('brand.index')->with('success','Brand Deleted Successfully');

         }

    }
}