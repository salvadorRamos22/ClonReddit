<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts= Post::all();
        return view('post.index')->with(['posts'=>$posts]);
    }

    public function show($postID){

        $post = Post::find($postID);
        return view('post.show')->with(['post'=>$post]);

    }

    public function create(){

        return view('post.create');
    }
}
