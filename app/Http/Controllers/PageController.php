<?php

namespace App\Http\Controllers;


use App\Models\Posts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $posts = Posts::with('user')->paginate(10);

        return view('welcome', ['posts' => $posts]);
    }


    public function posts()
    {

        $posts = Posts::all()->paginate(10);
        return view('user.posts', ['posts' => $posts]);
    }


    public function post(Posts $post)
    {

        return view('user.post', ['post' => $post]);
    }
}
