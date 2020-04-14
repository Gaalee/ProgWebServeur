<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ArticlesController extends Controller
{
    function index(){
        $posts = Post::all();

        return view('articles.index', compact('posts'));
    }

    public function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
       
        return view('article',array( //Pass the post to the view
            'post' => $post
        ));
     }
     

}
