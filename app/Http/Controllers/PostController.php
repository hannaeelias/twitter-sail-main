<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show the form for creating a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store the newly created post
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create and save the post
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect to a list of posts or wherever you prefer
        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}
