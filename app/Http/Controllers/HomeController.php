<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    function index(){
        $category = Category::limit(10)->orderBy('created_at', 'asc')->get();
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->where('status',1)->get();
        $popular = Blog::where('status',1)->orderBy('views', 'desc')->get();
        $allnews = Blog::latest()->paginate(9);
        $categorys = Category::limit(10)->where('status',1)->get();
        $comment = Comments::limit(5)->orderBy('created_at', 'desc')->get();
        return view('frontend.homepage.index',compact('category','leatest','popular','allnews','categorys','comment'));
    }
    function admin(){
        return view('backend.Dashboard.index');
    }
    function category(){
        $category = Category::where('status',1)->paginate(20);
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->where('status',1)->get();
        return view('frontend.extrapages.categorypage',compact('category','leatest'));
    }
    function page($id){
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->where('status',1)->get();
        $category = Category::all();
        $categorys = Category::find($id);
        $post= Blog::where('category_id',$id)->paginate(9);
        return view('frontend.extrapages.catwisepage',compact('leatest','category','categorys','post'));
        
        
    }
    function post($id){
        $post = Blog::find($id);
        $post->increment('views');
        $comment = Comments::where('blog_id',$id)->get();
        $category = Category::limit(10)->orderBy('created_at', 'asc')->get();
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->get();
        return view('frontend.extrapages.newspage',compact('post','comment','category','leatest'));
    }

    //User Dashboard
    function userdb(){
        $post = Blog::where('user_id',Auth::User()->id)->get();
        $postlist = Blog::where('user_id',Auth::User()->id)->paginate(2);
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->where('status',1)->get();
        $category = Category::limit(10)->orderBy('created_at', 'asc')->get();
        return view('frontend.user.index',compact('category','leatest','post','postlist'));
    }
    function req($id){
        $role = User::find($id);
        if($role->role == 2 ){
            $role->role = 3;
            $role->save();
        }
        return redirect()->back();
    }
    function account($id){
        $user = User::find($id);
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->where('status',1)->get();
        $category = Category::limit(10)->orderBy('created_at', 'asc')->get();
        return view('frontend.user.account',compact('user','category','leatest'));
    }
    function accup(Request $request,$id){
        $user = User::find($id);
        $user->fname = "$request->fname";
        $user->lname = "$request->lname";
        $user->age = "$request->age";
        $user->gender = "$request->gender";
        $user->division = "$request->division";
        $user->district = "$request->district";
        $user->thana = "$request->thana";
        $user->post = "$request->post";
        $user->zip = "$request->zip";
        $user->adress = "$request->adress";
        $image = $request->image;
        $folder = 'UserImage';
        if($image){
            // File::exists($image)
            // unlink($image);
            $imageinfo = $request->fname.'_'.$request->lname.'_'.rand(101, 99999).'.'.$image->getClientOriginalExtension();
            $image->move($folder,$imageinfo);
            $image = $folder.'/'.$imageinfo;
            $user->image = $image;
        }
        else{
            $user->image = 'no-image.jpg';
        }
        $user->save();
        return redirect()->back();
    }

    function addpage(){
        // $user = User::find($id);
        $post = Blog::where('user_id',Auth::User()->id)->orderBy('created_at','desc')->get();
        $leatest = Blog::limit(5)->orderBy('created_at','asc')->where('status',1)->get();
        $category = Category::limit(10)->orderBy('created_at', 'asc')->get();
        return view('frontend.user.create',compact('category','leatest','post'));
    }
    function create(Request $request){
        $post = new Blog();
        $post->title = "$request->title";
        $post->body = "$request->body";
        $post->category_id = "$request->category_id";
        $post->user_id = Auth::user()->id;
        $image = $request->image;
        $folder = 'PostImage';
        if($image){
            $imageinfo = 'Post_'.time().'_'.rand(101, 99999).'.'.$image->getClientOriginalExtension();
            $image->move($folder,$imageinfo);
            $image = $folder.'/'.$imageinfo;
            $post->image = $image;
        }
        else{
            $post->image = 'no-image.jpg';
        }
        $post->save();
        return redirect()->back()->with('msg','Post Created Successfully!!');
    }
}