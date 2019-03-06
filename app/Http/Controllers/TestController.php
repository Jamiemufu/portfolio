<?php

namespace App\Http\Controllers;

use \App\testimonials;
use Illuminate\Http\Request;

class TestController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show testimonials
        $testimonials = Testimonials::all();
        return view('auth.view',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show testimonial form
        return view('pages.testimonials');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate user input
        $request->validate([
            'author'=>'required|string',
            'company'=>'required|string',
            'comment'=>'required|string'
        ]);
        
        //get file and store
        $file = $request->file('picture');
        $path = $file->store('public/uploads');
        //remove public from string for dbase storage
        $newpath = str_replace("public/","",$path);

        //store data
        $test = new Testimonials;
        //append storage for the symlink
        $test->filename='storage/'.$newpath;
        $test->author=$request->input('author');
        $test->company=$request->input('company');
        $test->comment=$request->input('comment');
        $test->approved='pending';

        //save to database
        $test->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //update testimonial approved
        if (request('approve')) 
        {
            $testimonials = \App\testimonials::find($id);
            $testimonials->approved = "Approved";
            $testimonials->save();
            return redirect()->action('TestController@index');
        } 
        else 
        {
            $testimonials = \App\testimonials::find($id);
            $testimonials->delete();        
            return redirect()->action('TestController@index');
        }
       
    }
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
    }
}
