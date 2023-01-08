<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    function index(){
        $category = Category::all();
        return view('backend.category.index',compact('category'));
    }
    function addpage(){
        return view('backend.category.add');
    }
    function create(Request $request){
        $category = new Category();
        $category->name = "$request->name";
        $category->user_id = Auth::user()->id;
        $image = $request->image;
        $folder = 'CategoryImage';
        if($image){
            $imageinfo = time().'_'.rand(101, 99999).'.'.$image->getClientOriginalExtension();
            $image->move($folder,$imageinfo);
            $image = $folder.'/'.$imageinfo;
            $category->image = $image;
        }
        else{
            $category->image = 'no-image.jpg';
        }
        $category->save();
        return redirect()->back()->with('msg','Successfully Added!!');
    }
}
