<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register(){
        $category = Category::limit(3)->orderBy('created_at', 'desc')->get();
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->get();
        return view('frontend.register.registerform',compact('category','leatest'));
    }
    function register_user(Request $request){
        $reg = new User();
        $reg->fname = "$request->fname";
        $reg->lname = "$request->lname";
        $reg->email = "$request->email";
        $reg->password = Hash::make($request->password);
        $reg->age = "$request->age";
        $reg->gender = "$request->gender";
        $reg->division = "$request->division";
        $reg->district = "$request->district";
        $reg->thana = "$request->thana";
        $reg->post = "$request->post";
        $reg->zip = "$request->zip";
        $reg->adress = "$request->adress";
        $image = $request->image;
        $folder = 'UserImage';
        if($image){
            $imageinfo = $request->fname.'_'.$request->lname.'_'.rand(101, 99999).'.'.$image->getClientOriginalExtension();
            $image->move($folder,$imageinfo);
            $image = $folder.'/'.$imageinfo;
            $reg->image = $image;
        }
        else{
            $reg->image = 'no-image.jpg';
        }
        $reg->save();
        return redirect()->route('login-user');
    }  
    function login(){
        $category = Category::limit(3)->orderBy('created_at', 'desc')->get();
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->get();
        return view('frontend.register.login',compact('category','leatest'));
    }
    function login_success(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                        ->withSuccess('You have Successfully loggedin');
        }
        return redirect("login-user")->withSuccess('Oppes! You have entered invalid credentials');
    }
}
