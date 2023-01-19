<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ForumController extends Controller
{
    public function index()
    {
        return view('forum.index');
    }
    public function view()
    {
        return view('forum.view');
    }
    public function create()
    {
        $categories = Category::orderby('title', 'asc')->get();
        return view('forum.create')->with('categories', $categories);
    }
}
