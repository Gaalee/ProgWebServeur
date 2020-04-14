<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CRUDArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('articles.admin.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_title'=>'required',
            'post_content'=>'required',
            'post_type'=>'required',
            'post_category'=>'required'
        ]);

        $article = new Post([
            'user_id' => 1,
            'post_date' => now(),
            'post_content' => $request->get('post_content'),
            'post_title' => $request->get('post_title'),
            'post_status' => 'open',
            'post_name' => $request->get('post_title'),
            'post_type' => $request->get('post_type'),
            'post_category' => $request->get('post_category')
        ]);
        $article->save();
        return redirect('/articles')->with('success', 'Articles saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Post::find($id);
        return view('articles.admin.edit', compact('article'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'post_title'=>'required',
            'post_content'=>'required',
            'post_type'=>'required',
            'post_category'=>'required'
        ]);

        $article = Post::find($id);
        $article->post_content = $request->get('post_content');
        $article->post_title = $request->get('post_title');
        $article->post_status = $request->get('post_status');
        $article->post_name = $request->get('post_title');
        $article->post_type = $request->get('post_type');
        $article->post_category = $request->get('post_category');
        $article->save();

        return redirect('/admin/articles')->with('success', 'Articles updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Post::find($id);
        $article->delete();

        return redirect('/admin/articles')->with('success', 'Articles deleted !');
    }
}
