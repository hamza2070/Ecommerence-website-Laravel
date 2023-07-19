<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function index(){
    $products=product::all();
        return View('product',['products'=>$products]);
    }

    function detail($id){
     $data=product::find($id);
     return View('detail',['products'=>$data]);
    }
    function  search(Request $req){
      $data= product::where("name",'like','%'.$req->Search.'%')->get();
          return View('search',['products'=>$data]);    ;
    }
    function addtocart(Request $req){
     if(session()->has('user')){
        $user=$req->session()->get('user');
        $Cart=new cart;
        $Cart->product_id=$req->product_id;
        $Cart->user_id=session()->get('user')['id'];
        $Cart->save();
        return redirect('/');
     }else{
       return redirect('/login');
     }
    }
}
