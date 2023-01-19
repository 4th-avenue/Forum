<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderby('title', 'asc')->get();

        return view('category.index')->with('categories', $categories);
    }

    public function view($id)
    {
        $category = Category::find($id);

        return view('category.view')->with('category', $category);;
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->save();

        return redirect('/category');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/category');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->save();

        return redirect('/category');
    }
}
