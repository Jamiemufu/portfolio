<?php

namespace App\Http\Controllers;

use \App\testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class formController extends Controller
{   
    /**
    * Show the form to create a new post.
    *
    * @return Response
    */
    public function show() 
    {
        $data = testimonials::all();
        return view('pages.home', compact('data'));

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
        
        //save to database
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->location=$request->input('location');
        $contact->budget=$request->input('budget', false);
        $contact->comments=$request->input('comments', false);
        $contact->save();
        
        $input = $request->all();

        //send basic email saying received mail
        Mail::send('emails.contact', $input, function ($message) {
            $message->from('jamie@jedesign.xyz', 'Jamie Evans');
            $message->to('jamie@jedesign.xyz', 'Jamie Evans');
            $message->subject('Contact from portfolio website');
            $message->priority(3);
        });

        //return thanks page with name
        return view('pages.thanks', $input);

    }

}
