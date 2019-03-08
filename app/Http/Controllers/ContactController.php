<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{   
   
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
        

        //data for mailSend
        $data = $request->all();
        //send basic email saying received mail
        $this->mailSend('emails.contact', $data, 'Notification: New Contact Received');

        //return thanks page with name
        return view('pages.thanks', $data);

    }

    

}
