<?php

namespace App\Http\Controllers;
use \App\testimonials;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


     /**
    * Testimonials form post
    *
    * @param  Request  $request
    * @return Response
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

        //save to database
        $test->save();

        return redirect('/');
    }
}

