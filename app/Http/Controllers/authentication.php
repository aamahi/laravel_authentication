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
        $category = Category::select('id','category_name')->get();

        return view('authentication.signup',compact('category'));
    }
    public function signup(RegisterRequest $request){
       $image_file = $request->file('image');
       $image = "image_no_".rand(1,1000000)."_".date('Ydhis').".".$image_file->getClientOriginalExtension();
//       echo $image;
       if($image_file->isValid()){
           $image_file->storeAs('image',$image);
       }
//       echo "<pre>";
//       print_r($request->all());
//        echo "</pre>";

       register::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'age'=>$request->age,
           'category_id'=>$request->category_id,
           'password'=>md5($request->confirm_password),
           'image'=>$image,
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
    public function category_all(){
        $all = Category::select('id','category_name','slug')->get();
        return view('authentication.category_all',compact('all'));
    }

    public function all(){
        $all = register::select('id','name','email','age')->get();
        return view('authentication.all',compact('all'));
    }
}
