<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::published()->get();

        if ($activeCategorySlug = request()->query('category')) {
            $activeCategory = $categories->first(fn ($i) => $i->slug === $activeCategorySlug);
        }

        return view('post_index', [
            'activeCategory' => $activeCategory ?? false,
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        abort_unless($post = Post::whereSlug($slug)->first(), 404);

        return view('post_show', ['post' => $post]);
    }
}
