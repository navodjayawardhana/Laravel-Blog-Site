<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import the Post model
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id' => auth()->user()->id,
            'title' =>$request->title,
            'description' =>$request->description
        ]);

        return back();
    }
}
