<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){

        $posts = \App\Post::latest()->take(3)->get(); //get 3 last post
        return view('welcome',array(
            'posts' => $posts
        ));
 
    }
}
