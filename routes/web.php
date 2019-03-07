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
//post to formcontroller store method
Route::post('/', 'ContactController@store');
//testimonial get requests
Route::get('/', 'TestimonialController@show');
Route::get('/testimonials/all', 'TestimonialController@all');
Route::get('/testimonials/approve', 'TestimonialController@index');
Route::get('/testimonials/create', 'TestimonialController@create');
//testimonial post requests
Route::post('/testimonials/approve', 'TestimonialController@update');
Route::post('/testimonials/create', 'TestimonialController@store');
//resume
Route::any('/resume', function () {
    return view('pages.resume');
});




