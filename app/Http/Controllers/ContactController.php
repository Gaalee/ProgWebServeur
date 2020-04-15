<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    function index(){
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'contact_name'=>'required',
            'contact_email'=>'required|email',
            'contact_message'=>'required',
        ]);

        $contact = new Contact([
            'contact_name' => $request->get('contact_name'),
            'contact_email' => $request->get('contact_email'),
            'contact_message' => $request->get('contact_message'),
            'contact_date' => now()
        ]);
        $contact->save();
        return redirect('/contact')->with('success', 'Contact form sent !');
    }
}
