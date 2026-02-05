<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}

public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    Post::create([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return redirect('/posts')->with('success', 'Post added successfully');
}


public function edit($id)
{
    $post = Post::findOrFail($id);
    return view('posts.edit', compact('post'));
}


public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    $post->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return redirect('/posts')->with('success', 'Post updated');
}


public function destroy($id)
{
    Post::destroy($id);
    return redirect('/posts')->with('success', 'Post deleted');
}


}
