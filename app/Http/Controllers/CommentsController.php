<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    function index(){
        
        $comment = Comments::all();
        return view('backend.comments.index',compact('comment'));
    }
    function commnets(Request $r){
        $comment = new Comments();
        $comment->comments = "$r->comments";
        $comment->user_id = Auth::user()->id;
        $comment->blog_id = "$r->blog_id";
        $comment->save();
        return redirect()->back();
    }
}
