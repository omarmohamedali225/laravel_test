<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $Post = Post::all();
        // $Post = Post::where('title', 'omar')->get();
        // $Post = Post::find(2);

        // dd($Post);


        return view('posts.index', ["posts" => $Post]);
    }

    public function show(Post $postId)
    {
        // $data = Post::findOrFail($postId);
        return view('posts.show', ["postId" => $postId]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $req)
    {
        $data = $req;
        // $post = new Post;
        // $post->title = $data->title;
        // $post->lang = $data->desc;
        // $post->save();

        Post::create([
            "title" => $data->title,
            "lang" => $data->desc,
        ]);


        return to_route('posts.index');
    }
}
