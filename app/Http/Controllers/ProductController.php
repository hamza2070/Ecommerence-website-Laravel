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
}
