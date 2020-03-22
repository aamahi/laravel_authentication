<?php

namespace App\Http\Controllers;

use App\Authentication\Category;
use App\Authentication\register;
use App\Http\Requests\CategoryRequest;
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

    public function category_add(){
        return view('authentication.category_add');
    }
    public function categoryadd(CategoryRequest $request){
        Category::create([
            'category_name'=>$request->category_name,
            'slug'=>$request->slug,
        ]);

        return redirect()->back();
    }


    public function all(){
        $all = register::select('id','name','email','age')->get();
        return view('authentication.all',compact('all'));
    }
}
