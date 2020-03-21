<?php

namespace App\Http\Controllers;

use App\Authentication\register;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class authentication extends Controller
{
    public function register(){
        return view('authentication.signup');
    }
    public function signup(RegisterRequest $request){
       register::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'age'=>$request->age,
           'password'=>md5($request->confirm_password),
       ]);

       return redirect()->back();
    }
}
