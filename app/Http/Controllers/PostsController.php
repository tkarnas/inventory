<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function show($first_name)
    {
        $post = .\DB::table('users')->where('frist_name', $first_name)->first();

        


        return view('post', [
            'post' => $post
        ]);
    }
}