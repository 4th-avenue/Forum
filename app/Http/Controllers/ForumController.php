<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('forum.create');
    }
}
