<?php

namespace App\Http\Controllers\frontant;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function index(){
 $data['home_categories']=Category::where('show_on_home',1)->take(4)->get();
 $data['categories']=Category::take(4)->get();
  $data['products'] = Product::take(12)->get(); 
    return view('frontant.index',$data);
  }
public function catfilter($id)
{
$products = Product::where('category_id', $id)->get();


    if($products->isEmpty()) {
        return response()->json([
            'status' => false,
            'message' => 'Product Not Found'
        ]);
    } 
    // return view('frontant.index',$products);
$html =view('frontant.partisal.products',compact('products'))->render();
    return response()->json([
        'status' => $html,
        'message' => $products
    ]);
}
}