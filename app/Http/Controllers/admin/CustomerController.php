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
    //    public function create(){
    //     return view('');
        
    // }
    //     public function store(Request $req){
                 
    //     $req->validate([
    //         'title'=>'required',
    //         'code'=>'required|unique:coupons',
    //         'value'=>'required',
    //     ]);
   
    //     Coupon::create([
    //         'title'=>$req->title,
    //          'code'=>$req->code,
    //           'value'=>$req->value,
    //     ]);
    //     return redirect()->route('Coupon.index')->with('success','Coupon Created Successfully');
    // }
    //    public function edit($id){
    //     $edit=::find($id);
    //     return view('admin.coupon.update',compact('edit'));
    // }
    //    public function update(Request $req,$id){
    //     $update=Coupon::find($id);
   
    // $update->update([
    //         'title'=>$req->title,
    //          'code'=>$req->code,
    //           'value'=>$req->value,
    //     ]);
    //     return redirect()->route('Coupon.index')->with('success','Coupon Updated Successfully');
        
    // }
    //    public function destroy($id){
    //      $destroy=Coupon::find($id);
    //      if($destroy == null){
    //         return redirect()->route('Coupon.index')->with('danger','Coupon Not Found');
    //      }else{
    //         $destroy->delete();
    //         return redirect()->route('Coupon.index')->with('success','Coupon Deleted Successfully');

    //      }

    // }
}