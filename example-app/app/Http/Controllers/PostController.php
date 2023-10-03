<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
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

        $post  = Post::find(1);
        $video = Video::find(1);
        dd($video->comments);
        dd($post->comments);

        //        dd($post);
        //        $user = User::find(7);
        //        dd($user->post()->get());


        //        return view('posts', ['posts' => $posts]);
    }


    public function new_post() {

        Post::create([
            'title'   => 'my 2' . fake()->sentence(3),
            'slug'    => fake()->slug(2),
            'content' => fake()->text(),
            'date'    => fake()->date(),
            'image'   => fake()->image(),
            'status'  => rand(0, 1),
            'user_id' => rand(1, 4),
        ]);

        $post          = new Post;
        $post->title   = 'my 3' . fake()->sentence(3);
        $post->slug    = fake()->slug(2);
        $post->content = fake()->text();
        $post->date    = fake()->date();
        $post->image   = fake()->image();
        $post->status  = rand(0, 1);
        $post->user_id = rand(1, 4);
        $post->save();

        //        $post = Post::find(1);
        //        if ($post) $post->delete();


        $post = Post::all();
        return view('new_post', ['posts' => $post]);
    }
}
