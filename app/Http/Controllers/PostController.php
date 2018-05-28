<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts= Post::orderBy('id','desc')->paginate(10);
        return view('post.index')->with(['posts'=>$posts]);
    }

    public function show($postID){

        $post = Post::find($postID);
        return view('post.show')->with(['post'=>$post]);

    }

    public function create(){

        return view('post.create');
    }

    public function store(CreatePostRequest $request){

       $post = new Post();
        $post->title = $request->get('title');
        $post->descripcion = $request->get('descripcion');
        $post->url = $request->get('url');
        $post->save();

      //  $post=Post::create($request->only('title','descripcion','url'));

        return redirect()->route('posts_path');

    }

    public function edit(Post $post){
        return view('post.edit')->with(['post'=>$post]);
    }

    public function update(Post $post, UpdatePostRequest $request){
        //PRIMER METODO
      $post->title = $request->get('title');
      $post->descripcion = $request->get('descripcion');
      $post->url = $request->get('url');
      $post->save();

    //  $post->update(
    //      $request->only('title','descripcion','url')
    //  );

      return redirect()->route('post_path',['post'=>$post->id]);
    }

    public function delete(Post $post){
        $post->delete();

        return redirect()->route('post_path');
    }
}
