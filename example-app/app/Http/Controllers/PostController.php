<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() {
        //        $posts = Post::paginate(5);
        //        $posts = Post::simplePaginate(5);

        //        $posts = Post::first();
        //        dd($posts->user);

        $user = User::find(7);
        dd($user->post()->get());

        //        $user = User::find(7);
        //        dd($user->post()->get());
        return view('posts', ['posts' => $posts]);
    }


}
