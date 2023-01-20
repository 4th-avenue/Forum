<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        if(isset(auth()->user()->id)){
            $categories = Category::orderby('title', 'asc')->get();
    
            return view('category.index')->with('categories', $categories);
        }else{
            return redirect('/');
        }
    }

    public function view($id)
    {
        if(isset(auth()->user()->id)){
            $category = Category::find($id);

            return view('category.view')->with('category', $category);;
        }else{
            return redirect('/');
        }
    }

    public function store(Request $request)
    {
        if(isset(auth()->user()->id)){
            $category = new Category;
            $category->title = $request->title;
            $category->save();
    
            return redirect('/category');
        }else{
            return redirect('/');
        }
    }

    public function delete($id)
    {
        if(isset(auth()->user()->id)){
            $category = Category::find($id);
            $category->delete();
    
            return redirect('/category');
        }else{
            return redirect('/');
        }
    }

    public function update(Request $request, $id)
    {
        if(isset(auth()->user()->id)){
            $category = Category::find($id);
            $category->title = $request->title;
            $category->save();
    
            return redirect('/category');
        }else{
            return redirect('/');
        }
    }
}
