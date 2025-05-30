<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Product_attrubutes;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $data['products'] = Product::get();
        return view('admin.Product.index',$data);
    }

    public function create(){
   
        // dd($['sizes']);
        return view('admin.Product.create');
    }

public function store(Request $req){
    $req->validate([
        'name' => 'required',
    ]);

      Product::create([
        'name'=>$req->name,
       'slug' => str_replace(' ','-',strtolower($req->name)),
      ]);
    return redirect()->route('product.index')->with('success','Product Created Successfully');
}

    public function edit($id){
          $data['categories'] = Category::get();
        $data['colors'] = Color::get();
        $data['sizes'] = Size::get();
        $data['edit'] = Product::find($id);
        return view('admin.Product.update',$data);
    }

    public function update(Request $req, $id){
        $product_attr=Product_attrubutes::where('product_id',$id)->get();
        foreach ($product_attr as $attr) {
           if($attr->attr_image){
    File::delete(public_path('uploads/inventory'),$attr->attr_image);
           }
           $attr->delete();
        }
        $update = Product::find($id);
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

    if($req->has('inventries')) {
        foreach ($req->inventries as $inventory) {
            $inventoryImagePath = null;
            
            // Handle inventory image if exists
            if(!empty($inventory['attr_image']) ) {
                $image = $inventory['attr_image'];
                $ext = $image->getClientOriginalExtension();
                $inventoryImagePath = time().uniqid().'.'.$ext;
                $image->move(public_path('uploads/inventory'), $inventoryImagePath);
            }

            Product_attrubutes::create([
                'product_id' => $id,
                'sku' => $inventory['sku'],
                'mrp' => (float)$inventory['mrp'],
                'price' => (float)$inventory['price'],
                'size_id' => (int)$inventory['size_id'],
                'color_id' => (int)$inventory['color_id'],
                'attr_image' => $inventoryImagePath,
                'qty' => (int)($inventory['qty'] ?? 0)
            ]);
        }
    }

    return redirect()->route('product.index')->with('success','Product Updated Successfully');
    }

public function destroy($id)
{
    $product = Product::find($id);
    
    if (!$product) {
        return redirect()->route('product.index')->with('danger', 'Product Not Found');
    }
    
    // Delete all product attributes (SKU data)
    $attributes = Product_attrubutes::where('product_id', $id)->get();
    
    foreach ($attributes as $attr) {
        // Delete attribute image if exists
        if ($attr->attr_image && file_exists(public_path('Uploads/inventory/' . $attr->attr_image))) {
            File::delete(public_path('Uploads/inventory/' . $attr->attr_image));
        }
        $attr->delete();
    }
    
    // Delete product image if it exists
    if ($product->image && file_exists(public_path('Uploads/product/' . $product->image))) {
        File::delete(public_path('Uploads/product/' . $product->image));
    }
    
    $product->delete();
    
    return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');
}
}