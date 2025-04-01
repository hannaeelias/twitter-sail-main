<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show the post creation form
    public function create()
    {
        return view('posts.create');
    }

    // Store a new post
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create the post
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect to the posts index page
        return redirect()->route('posts.index');
    }

    // Show all posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
