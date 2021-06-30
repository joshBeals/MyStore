<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Login Function
    function login(Request $req){
        // return $req->input();
        $user =  User::where([
            'email'=>$req->email
        ])->first();

        if($user && Hash::check($req->password, $user->password)){
            $req->session()->put('user',$user);
            return redirect('/');
        }else{
            return ["user"=>$user, "message"=>"Username or password is not matched"];
        }
    }

    function register(Request $req){
        $user = new User;

        $checkEmail =  User::where([
            'email'=>$req->email
        ])->first();

        if(!$checkEmail){
            $user->name = $req['name'];
            $user->email = $req['email'];
            $user->password = Hash::make($req['password']);
            $user->save();
            return redirect('/login');
        }else{
            return redirect('/register');
        } 
    }
}
