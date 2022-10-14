<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        // dd($posts);

        return view('pages.index', compact('posts'));
    }

    public function create()
    {
        $posts = Post::get();

        // dd($posts);

        return view('pages.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());

        return redirect()->route('post.index');
        // dd('cad new post');
        // dd($posts);
        // dd($request->all());
    }
}
