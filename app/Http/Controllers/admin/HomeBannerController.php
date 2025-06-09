<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeBannerController extends Controller
{
 public function index(){
        $data['homes']=HomeBanner::get();
        return view('admin.HomeBanner.index',$data);
    }
       public function create(){
        return view('admin.HomeBanner.create');
        
    }
        public function store(Request $req){
                 
        $req->validate([
            'image'=>'required|image',
        ]);
    if($req->has('image')){
            $image=$req->image;
             $ext = $image->getClientOriginalExtension();
             $path=time().uniqid().'.'.$ext;
            $image->move(public_path('uploads/Banners'), $path);
            
        }
        HomeBanner::create([
          
             'btn_txt'=>$req->btn_txt,
             'btn_link'=>$req->btn_link,
             'image'=>$path,
             'status'=>$req->status,
        ]);
        return redirect()->route('homebanner.index')->with('success','HomeBanner Created Successfully');
    }
       public function edit($id){
        $edit=HomeBanner::find($id);
        return view('admin.HomeBanner.update',compact('edit'));
    }
       public function update(Request $req,$id){
            $path="";
        $update=HomeBanner::find($id);
        if($req->has('image')){
             if($update->image && file_exists(public_path('uploads/Banners/'.$update->image))) {
           unlink(public_path('uploads/Banners/'.$update->image)) ;
        }
            $image=$req->image;
             $ext = $image->getClientOriginalExtension();
             $path=time().uniqid().'.'.$ext;
            $image->move(public_path('uploads/Banners'), $path);
            
        }
    $update->update([
       
             'btn_txt'=>$req->btn_txt,
             'btn_link'=>$req->btn_link,
             'image'=>$path,
             'status'=>$req->status,
        ]);
        return redirect()->route('homebanner.index')->with('success','HomeBanner Updated Successfully');
        
    }
     
         public function destroy($id){
         $destroy=HomeBanner::find($id);
         if($destroy == null){
            return redirect()->route('homebanner.index')->with('danger','HomeBanner Not Found');
         }else{
            if($destroy->image && file_exists(public_path('uploads/Banners/'.$destroy->image))){
                File::delete(public_path('uploads/Banners/'.$destroy->image));
            }
            $destroy->delete();
            return redirect()->route('homebanner.index')->with('success','HomeBanner Deleted Successfully');

         }

    }
}