<?php

namespace App\Http\Controllers\frontant;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function index(){
 $data['home_categories']=Category::where('show_on_home',1)->take(4)->get();
 $data['categories']=Category::take(5)->get();
  $data['products'] = Product::get(); 
  $data['brands'] = Brand::where('status',1)->where('show_on_home',1)->get(); 
    return view('frontant.index',$data);
  }
public function catfilter($id)
{
$products = Product::with('product_attr')->where('category_id', $id)->take(4)->get();


    if($products->isEmpty()) {
        return response()->json([
            'status' => false,
            'message' => 'Product Not Found'
        ]);
    } 

$html =view('frontant.partisal.products',compact('products'))->render();
    return response()->json([
        'status' => true,
        'message' => $html
    ]);
}
public function productfilter(Request $req){
  $product=Product::where('status',1);
  if($req->filter == 'trending'){
    $product=$product->where('is_trending',1);
  }elseif($req->filter == 'featured'){
    $product=$product->where('is_featured',1);
  }elseif($req->filter == 'discount'){
    $product=$product->where('is_discounted',1);
  }
  $product=$product->get();
//   dd($product);
  if($product->isEmpty()) {
   return response()->json([
            'status' => false,
            'message' => 'Product Not Found'
        ]);
}
$html= view('frontant.partisal.filter',['products' => $product])->render();

 return response()->json([
        'status' => true,
        'message' => $html,
 ]);
}
}