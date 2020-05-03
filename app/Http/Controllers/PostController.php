<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $data['articel'] = Post::simplePaginate(3);
        return view('app', $data);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        dd($post);
        return view('components.post', $post);
    }
}
