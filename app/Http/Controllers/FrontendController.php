<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductEnquiry;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getproductbycat($id){
        $data=Product::where('category_id',$id)->paginate(2);
       
       return view('frontend.product_list',compact('data'));
    }
    public function storeenquiry(Request $request){
    
 $request->validate([
     'name'=>'required',
     'email'=>'required|email',
     'number'=>'required',
     'subject'=>'required',
     'message'=>'required',

 ]);
$pro=new ProductEnquiry;
$pro->name=$request->name;
$pro->email=$request->email;
$pro->number=$request->number;
$pro->subject=$request->subject;
$pro->msg=$request->message;
$pro->product_id=$request->product_id;
$pro->save();
 return redirect()->back();

    }

    public function product_detail($id){
        $data=Product::find($id);
      return view('frontend.product_detail',compact('data'));

    }
}
