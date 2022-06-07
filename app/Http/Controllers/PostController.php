<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index ()
    {
        // return Post::latest()->paginate();
        return view('index', [
            'posts' => Post::latest()->paginate()
        ]);
    }
}
