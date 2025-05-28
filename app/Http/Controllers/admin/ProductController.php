<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $data['products'] = Product::get();
        return view('admin.Product.index',$data);
    }

    public function create(){
        $data['categories'] = Category::get();
        return view('admin.Product.create',$data);
    }

    public function store(Request $req){
        $req->validate([
            'name' => 'required',
        ]);

        $originalpath = '';
        if($req->hasFile('image')){
            $image = $req->file('image');
            $ext = $image->getClientOriginalExtension();
            $originalpath = time().'.'.$ext;
            $image->move(public_path('uploads/product'), $originalpath);
        }

        Product::create([
            'name' => $req->name,
            'category_id' => $req->category_id,
            'image' => $originalpath,
            'slug' => str_replace(' ','-',strtolower($req->name)),
            'brand' => $req->brand,
            'model' => $req->model,
            'short_desc' => $req->short_desc,
            'desc' => $req->desc,
            'keywords' => $req->keywords,
            'technical_specification' => $req->technical_specification,
            'uses' => $req->uses,
            'waranty' => $req->waranty,
            'status' => $req->status,
        ]);

        return redirect()->route('product.index')->with('success','Product Created Successfully');
    }

    public function edit($id){
        $categories = Category::get();
        $edit = Product::find($id);
        return view('admin.Product.update', compact('edit', 'categories'));
    }

    public function update(Request $req, $id){
        $update = Product::find($id);
        $originalpath = $update->image; // Keep existing image by default

        if($req->hasFile('image')){
            // Delete old image if exists
            if($update->image && file_exists(public_path('uploads/product/'.$update->image))) {
                File::delete(public_path('uploads/product/'.$update->image));
            }

            // Upload new image
            $image = $req->file('image');
            $ext = $image->getClientOriginalExtension();
            $originalpath = time().'.'.$ext;
            $image->move(public_path('uploads/product'), $originalpath);
        }

        $update->update([
            'name' => $req->name,
            'category_id' => $req->category_id,
            'image' => $originalpath,
            'slug' => str_replace(' ','-',strtolower($req->name)),
            'brand' => $req->brand,
            'model' => $req->model,
            'short_desc' => $req->short_desc,
            'desc' => $req->desc,
            'keywords' => $req->keywords,
            'technical_specification' => $req->technical_specification,
            'uses' => $req->uses,
            'waranty' => $req->waranty,
            'status' => $req->status,
        ]);

        return redirect()->route('product.index')->with('success','Product Updated Successfully');
    }

    public function destroy($id){
        $destroy = Product::find($id);
        
        if($destroy == null){
            return redirect()->route('product.index')->with('danger','Product Not Found');
        } else {
           
            if($destroy->image && file_exists(public_path('uploads/product/'.$destroy->image))) {
                File::delete(public_path('uploads/product/'.$destroy->image));
            }
            
            $destroy->delete();
            return redirect()->route('product.index')->with('success','Product Deleted Successfully');
        }
    }
}