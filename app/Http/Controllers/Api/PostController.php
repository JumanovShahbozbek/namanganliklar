<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
        ]);

        $data = Post::create($request->all());

        return $data; 
    }

    public function show($id)
    {
        $post = Post::find($id);

        return $post;
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
        ]);

        $post->update($request->all());

        return $post; 
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return "Succes";
    }
}
