<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello()
    {
        // $post = Post::find(1);
        $posts = Post::all();
        return view("template", [
            "name" => "Vladimir",
            "posts" => $posts,
        ]);
    }
}
