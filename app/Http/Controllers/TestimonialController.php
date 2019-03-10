<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\testimonials;

class TestimonialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $testimonials = Testimonials::all();

        //logic to display message depending on approvals
        $count = 0;
        foreach ($testimonials as $key => $item) {
            if ($item->approved === 'Pending') {
                $count = $count + 1;
            }
        }
        if ($count > 0) {
            $message = "Please approve or remove pending testimonials";
        } else {
            $message = "There are currently no testimonials pending approval";
        }

        //return data to view
        return view('admin.testimonials', compact('testimonials'))->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return create testimonial form
        return view('pages.createTestimonial');
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
            'author' => 'required|string',
            'company' => 'required|string',
            'comment' => 'required|string',
        ]);
    
        //get file and store
        $file = $request->file('picture');
        $path = $file->store('public/uploads');
        //remove public from string for dbase storage
        $newpath = str_replace("public/", "", $path);

        //store data
        $test = new Testimonials;
        //append storage for the symlink
        $test->filename = 'storage/' . $newpath;
        $test->author = $request->input('author');
        $test->company = $request->input('company');
        $test->comment = $request->input('comment');
        $test->approved = 'Pending';

        //save to database
        $test->save();
        
        //data for mailSend
        $data = $request->all();

        //send email notifaction of new testimonial
        $this->mailSend('emails.testimonialNotification', $data, 'New Testimonial Received');

        return redirect('/');
    }


    /**
     * showAll
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function all(Request $request)
    {
        //show all testimonials
        $testimonials = testimonials::all();
        return view('admin.all', compact('testimonials'));
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

        $testimonials = \App\testimonials::find($id);

        //if request approved update
        if (request('approve')) {
            $testimonials->approved = "Approved";
            $testimonials->save();
        }
        //if request delete
        else {
            $testimonials->delete();
        }

        return redirect()->action('TestimonialController@index');

    }

}
