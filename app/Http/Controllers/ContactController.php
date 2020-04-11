<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        return view('contact');
    }

    public function store(ContactRequest $request){
    // The incoming request is valid...

    // Retrieve the validated input data...
    $validated = $request->validated();
        // The blog post is valid...
    }
}
