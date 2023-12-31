<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    function login(Request $req){
        $user=User::where(['email'=>$req->email])->first();
        if(!$user||!Hash::check($req->password, $user->password)){
            return 'USER NOT LOGGED IN !!!';
        }else{
            $req->session()->put('user',$user);
             return redirect('/');
        }
    }
    function logout(){
        session()->forget('user');
        return redirect('/login');
    }
}
