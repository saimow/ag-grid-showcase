<?php

namespace App\Http\Controllers\PostController;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function index(){

        return view('posts.index');
    }

    public function getData(){
        $posts = Post::get();

        return PostResource::collection(Post::all());
    }
}
