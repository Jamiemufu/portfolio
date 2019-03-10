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
 
        //TO DO MAKE FUNCTION FOR THIS
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


    /**
     * delete project
     *
     * @param  mixed $request
     * @param  mixed $id
     *
     * @return void
     */
    public function removeProject (Request $request, $id)
    {
        $projects = \App\projects::find($id);
        $projects->delete();
        
        // redirect to get route
        return redirect('/project/delete');

    }

    public function showProjects(Request $request) 
    {
        $projects = projects::all();
        
        return view('admin.removeProject', compact('projects'));
    }


}
