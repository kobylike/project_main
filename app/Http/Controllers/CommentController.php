<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //

    public function store(Request $request){
        if(Auth::check()){
        $request->validate([

            'comment_body'=>'required'
        ]);

        $user_id=Auth::user()->id;
        $post_id=$request->input('post_id');
        $body=$request->input('comment_body');

        $request=new Comment();
        $request->user_id=$user_id;
        $request->post_id=$post_id;
        $request->body=$body;
        $request->save();
        if($request){
            return back()->with('success','Comment Posted Successfully');
        }

    }
    else{

        return back()->with('failed','You need to login first to Comment');
    }


    }

    public function edit(){

    }

    public function destroy(Comment $comment){

        $comment->delete();
        if($comment){
            return back()->with('success','Comment Deleted Successfully');
        }
    }
}
