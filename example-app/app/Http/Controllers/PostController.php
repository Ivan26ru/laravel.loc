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

        $posts = $user->post()->orderBy('id', 'desc')->get();

        $posts = $posts->pluck('title', 'id')->all();

        $post = Post::find(4);

        echo "<pre>";

        print_r($post->comments);
        foreach ($post->comments as $comment) {
            print_r($comment);
        }
//        dd($post);
        //        $user = User::find(7);
        //        dd($user->post()->get());


//        return view('posts', ['posts' => $posts]);
    }


}
