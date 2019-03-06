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
//pass testimonials to / view
Route::get('/', 'TestimonialController@show');

//post to formcontroller store method
Route::post('/', 'ContactController@store');

//resume
Route::any('/resume', function () {
    return view('pages.resume');
});

//testimonials resource routes
Route::resource('testimonials', 'TestimonialController');


