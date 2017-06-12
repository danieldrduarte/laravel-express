<?php

namespace Sabixao\Http\Controllers;

use Sabixao\Post;
use Illuminate\Http\Request;
use Sabixao\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {
//        $posts = \Sabixao\Post::all();
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
