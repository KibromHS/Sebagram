<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Post;

class PostsController extends Controller
{
    public function create() {
        return view('posts.create');
    }

    public function store() {
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        Post::create($data);
    }
}
