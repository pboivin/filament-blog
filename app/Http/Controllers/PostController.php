<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('post_index');
    }

    public function show($slug)
    {
        return view('post_show', [
            'slug' => $slug,
        ]);
    }
}
