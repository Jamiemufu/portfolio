<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/', 'formController@show');
Route::post('/', 'formController@store');

//resume
Route::any('/resume', function () {
    return view('pages.resume');
});

//testimonials
//RESOURCE
Route::resource('test', 'TestController');


