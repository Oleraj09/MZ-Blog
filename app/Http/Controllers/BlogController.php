<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    function index(){
        $post = Blog::all();
        return view('backend.post.index',compact('post'));
    }
    function addpage(){
        $category = Category::where('status',1)->get();
        return view('backend.post.add',compact('category'));
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
