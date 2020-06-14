<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latest_three_posts = Post::latest()->take(3)->get();
        return view("welcome", ['posts' => $latest_three_posts]);

    }
}
