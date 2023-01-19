<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

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
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->save();

        $result = $request->all();

        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }
}
