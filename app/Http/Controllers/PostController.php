<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $categories = Category::orderBy('id', 'DESC')->limit(7)->get();
        return view('posts.show', compact('categories'))->with([
            'post' => $post,
            'recent_posts' => Post::latest()->take(5)->get()
        ]);
    }
}
