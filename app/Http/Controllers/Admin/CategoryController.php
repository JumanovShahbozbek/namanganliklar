<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request, Category $category)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('create', 'categories', $user, $category));

        Category::create($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('edit', 'categories', $user, $category));
        $requestData = $request->all();

        // Category::find($id)->update($request->all());
        $category->update($requestData);

        return redirect()->route('admin.categories.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy(Category $category)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'categories', $user, $category));

        // Category::find($id)->delete();
        $category->delete();

        return redirect()->route('admin.categories.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
