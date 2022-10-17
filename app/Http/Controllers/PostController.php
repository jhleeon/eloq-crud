<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
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

    public function edit($id){
        $post = Post::find($id);
        return view('edit',compact('post'));
    }

    public function update(Request $request,$id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_update',"Post Updated Successfully");
    }
    
    public function delete($id){
        Post::where('id',$id)->delete();
        return back()->with('post_delete',"Post Deleted Successfully");
    }
}
