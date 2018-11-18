<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{   
    /**
    * Show the form to create a new post.
    *
    * @return Response
    */
    public function show() 
    {

        return view('pages.home');

    }

    /**
    * Store a new blog post.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request)
    {
        $contact = new \App\contact;

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'budget' => 'nullable',
            'location' => 'required',
            'comments' => 'nullable'
        ]);

        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->location=$request->input('location');
        $contact->budget=$request->input('budget', false);
        $contact->comments=$request->input('comments', false);
        $contact->save();
        
        $name = $request->input('name');

        return view('pages.thanks', ['name' => $name]);

    }

}
