<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() {
        $posts = Post::paginate(5);
//        $posts = Post::simplePaginate(5);
        return view('posts', ['posts'=> $posts]);
    }


}
