<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function createPost(Request $request){
        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created','post has been created successfully');

    }

    public function index(){
        $posts = Post::orderBy('id','DESC')->get();
        return view('index',compact('posts'));
    }

    public function show($id){
        $post = Post::where('id',$id)->first();
        return view('show',compact('post'));

    }
}