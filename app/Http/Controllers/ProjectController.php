<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\projects;

class ProjectController extends Controller
{
    //store project
    /**
     * store
     *
     * @param  mixed $request
     *
     *@return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Projects;
 
        //get file and store
        $file = $request->file('picture');
        $path = $file->store('public/uploads');
        //remove public from string for dbase storage
        $newpath = str_replace("public/", "", $path);
        $project->image = 'storage/' . $newpath;
            
        $project->name = $request->input('name');
        $project->link = $request->input('url');
        $project->html = $request->input('html');
        $project->php = $request->input('php');
        $project->css = $request->input('css');
        $project->dbase = $request->input('dbase');
        $project->js= $request->input('js');

        $project->save();

        return redirect('/admin');
    }

    public function show()
    {
        
    }
}
