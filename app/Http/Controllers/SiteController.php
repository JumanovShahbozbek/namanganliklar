<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function get_index()
    {
        return view('welcome');
    }

    public function get_article()
    {
        return view('pages.article');
    }

    public function get_contact()
    {
        return view('pages.contact');
    }

    public function get_list()
    {
        return view('pages.list');
    }

    public function post_registers(Request $request)
    {
        DB::table('registers')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
            'file' => $request->file,
        ]);
        
        return back();
    }
}
