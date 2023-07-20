<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    static function cartCount(){
        $user_id=session()->get('user')['id'];
        $cartCount=cart::where('user_id',$user_id)->count();
        return $cartCount;
    }

    function cartlist(){
        $user_id=session()->get('user')['id'];
        $data=DB::table('carts')->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user_id)
        ->select('products.*','carts.id as cart_id')
        ->get();
        return View('cartlist',['products'=>$data]);
    }

    function removeCart($id){
        cart::destroy($id);
        return redirect('/cartlist');
    }
}
