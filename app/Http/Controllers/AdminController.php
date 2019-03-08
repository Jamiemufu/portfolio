<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * dashboard
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }

    /**
     * logout
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function logout(Request $request)
    {
        return redirect('/')->with(Auth::logout());
    }
}
