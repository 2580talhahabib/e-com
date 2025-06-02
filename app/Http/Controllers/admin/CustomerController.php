<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $data['customers']=Customer::get();
        return view('admin.customer.index',$data);
    }
  public function show($id){
     $show = Customer::findOrFail($id);

    return view('admin.customer.show',compact('show'));
  }
}