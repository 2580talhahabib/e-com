<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryController extends Controller
{
    public function index(){
        $data['categories']=Category::get();
        return view('admin.categories.index',$data);
    }
       public function create(){
        $data['categories']=Category::get();
        return view('admin.categories.create',$data);
        
    }
      public function store(Request $req){
       
    $req->validate([
        'name' => 'required',
    ]);

    $categoryData = [
        'name' => $req->name,
        'slug' => str_replace(' ', '-', strtolower($req->name)),
        'parent_category' => $req->parent_category,
        'show_on_home'=>$req->show_on_home,
    ];

    if($req->hasFile('category_image')){
         $originalpath=null;
        $image = $req->file('category_image');
        $ext = $image->getClientOriginalExtension();
        $originalpath = time().'.'.$ext;
        $image->move(public_path('uploads/Category'), $originalpath);
        $categoryData['category_image'] = $originalpath;
    }

    Category::create($categoryData);
    
    return redirect()->route('category.index')->with('success','Category Created Successfully');
}
      
       public function edit($id){
        $data['edit']=Category::find($id);
            $data['categories']=Category::where('id','!=',$id)->get();
        return view('admin.categories.update',$data);
    }
       public function update(Request $req,$id){
          $path="";
        $update=Category::find($id);
        if($req->has('image')){
             if($update->image && file_exists(public_path('uploads/Category/'.$update->image))) {
           unlink(public_path('uploads/Category/'.$update->image)) ;
        }
            $image=$req->image;
             $ext = $image->getClientOriginalExtension();
             $path=time().uniqid().'.'.$ext;
            $image->move(public_path('uploads/Category'), $path);
    }
    $update->update([
            'name'=>$req->name,
            'slug'=>str_replace(' ','-',strtolower($req->name)),
            'parent_category' => $req->parent_category,
            'show_on_home'=>$req->show_on_home,
            'category_image'=>$req->$path,
        ]);
        return redirect()->route('category.index')->with('success','Category Updated Successfully');
        
    }
       public function destroy($id){
         $destroy=Category::find($id);
         if($destroy == null){
            return redirect()->route('category.index')->with('danger','Category Not Found');
         }else{
            if($destroy->category_image){
                File::delete(public_path('Uploads/Category/' . $destroy->category_image));
            }
            $destroy->delete();
            return redirect()->route('category.index')->with('success','Category Deleted Successfully');

         }

    }
}