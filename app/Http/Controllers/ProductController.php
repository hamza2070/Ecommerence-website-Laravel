<?php

namespace App\Http\Controllers;

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
}
