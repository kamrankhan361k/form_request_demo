<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        Post::create($request->validated()); // Saves validated data

        return redirect()->back()->with('success', 'Post created successfully!');
    }

    // Show form for creating a post
    public function create()
    {
        return view('posts.create');
    }
}
