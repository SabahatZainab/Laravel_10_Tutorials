<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function show_posts()
    {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }
}
