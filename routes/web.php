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


//home with testimonial data to view
Route::get('/', 'TestimonialController@show');
//post Contact form
Route::post('/', 'ContactController@store');
Route::get('/testimonials/create', 'TestimonialController@create');
Route::post('/testimonials/create', 'TestimonialController@store');

//Admin only routes
Route::get('/testimonials/all', 'TestimonialController@all')->middleware('auth.basic');
Route::get('/testimonials/approve', 'TestimonialController@index')->middleware('auth.basic');
Route::any('/admin', 'AdminController@dashboard')->middleware('auth.basic');
Route::put('/testimonials/approve{id}', 'TestimonialController@update')->middleware('auth.basic');
Route::any('/logout', 'AdminController@logout');

//resume
Route::any('/resume', function () {
    return view('pages.resume');
});

// TODO
// 1) Used the same mail function twice, re-factor to a class
// 2) Editable and database driven projects
//    ProjectController -> Create/Edit/Delete model and routes -> Storage - > redo frontend
// 3) Editable sections
//    SectionControlller -> Create/Edit model and routes -> redo frontend

