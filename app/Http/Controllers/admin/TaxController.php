<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index(){
        $data['taxes']=Tax::get();
        return view('admin.Tax.index',$data);
    }
       public function create(){
        return view('admin.Tax.create');
        
    }
        public function store(Request $req){
                 
        $req->validate([
            'tax_value'=>'required|unique:taxes',
        ]);
   
        Tax::create([
            'tax_desc'=>$req->tax_desc,
             'tax_value'=>$req->tax_value,
        ]);
        return redirect()->route('tax.index')->with('success','Tax Created Successfully');
    }
       public function edit($id){
        $edit=Tax::find($id);
        return view('admin.Tax.update',compact('edit'));
    }
       public function update(Request $req,$id){
        $update=Tax::find($id);
       
    $update->update([
        'tax_desc'=>$req->tax_desc,
             'tax_value'=>$req->tax_value,
        ]);
        return redirect()->route('tax.index')->with('success','Tax Updated Successfully');
        
    }
       public function destroy($id){
         $destroy=Tax::find($id);
         if($destroy == null){
            return redirect()->route('tax.index')->with('danger','Tax Not Found');
         }else{
            $destroy->delete();
            return redirect()->route('tax.index')->with('success','Tax Deleted Successfully');

         }

    }
}