<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //Login 
    function login(Request $req) {
        //return $req->input();
        //return User::where(['email'=>$req->email])->first();
        $user= User::where(['email'=>$req->email])->first();
        return $user->password;
        if (!$user || !Hash::check($req->password,$user->password)){
            return " Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user); 
            return redirect('/');
        }

    }
    
}