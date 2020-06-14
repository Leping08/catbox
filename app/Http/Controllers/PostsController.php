<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view("posts.index", compact("posts"));

    }

    public function show($id)
    {
        $post = Post::where('id', $id)->get()->first();
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
       $post = new Post();

       $post->title = request("title");
       $post->content = request("content");

       $post->save();

       return redirect('/posts');
    }
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }
    public function update($id)
    {
        $post = Post::find($id);

        $post->title = request("title");
        $post->content = request("content");
        $post->save();

        return redirect('/posts/' . $post->id);
    }
}


