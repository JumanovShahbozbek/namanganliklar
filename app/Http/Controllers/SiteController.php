<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function get_index()
    {
        $categories = Category::orderBy('id', 'DESC')->limit(7)->get();
        $posts = Post::limit(6)->latest()->get();

        return view('welcome', compact('categories', 'posts'));
    }

    public function get_article()
    {
        $categories = Category::orderBy('id', 'DESC')->limit(7)->get();
        $posts = Post::orderBy('id', 'DESC')->limit(6)->get();

        return view('pages.article', compact('categories', 'posts'));
    }

    public function get_contact()
    {
        $categories = Category::orderBy('id', 'DESC')->limit(7)->get();

        return view('pages.contact', compact('categories'));
    }

    public function get_list($id)
    {
        $categories = Category::orderBy('id', 'DESC')->limit(7)->get();
        $posts = Post::orderBy('id', 'DESC')->limit(6)->get();
        $category = Category::where('id', $id)->first();


        return view('pages.list', compact('categories', 'posts', 'category'));
    }

    public function singlePost($id){

        $post = Post::where('id', $id)->first();
        $categories = Category::orderBy('id', 'DESC')->limit(7)->get();
        $posts = Post::orderBy('id', 'DESC')->limit(6)->get();
        /* $post->increment('view');
        $post->save();

        $otherPosts = \App\Models\Post::where('category_id', $post->category_id)
        ->where('id', '!=', $post->id)
        ->limit(3)->latest()->get();

        Meta::prependTitle($post->meta_title);
        Meta::setDescription($post->meta_description);
        Meta::setKeywords($post->meta_keywords); */

        return view('pages.singlePost', compact('post', 'categories', 'posts'));
    }

    public function post_messages(Request $request)
    {
        DB::table('messages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
            'file' => $request->file,
            'status' => 0
        ]);
        
        return back()->with('success', 'Xabar jo`natildi');
    }
}
