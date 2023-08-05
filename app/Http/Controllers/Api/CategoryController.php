<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return $categories;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
        ]);

        $data = Category::create($request->all());

        return $data; 
    }

    public function show($id)
    {
        $category = Category::find($id);

        return $category;
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_uz' => 'required',
            'name_ru' => 'required',
        ]);

        $category->update($request->all());

        return $category; 
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return "Succes";
    }
}
