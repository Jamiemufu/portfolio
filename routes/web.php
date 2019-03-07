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
Route::post('/testimonials/create', 'TestimonialController@store');
//testimonial put request
Route::put('/testimonials/approve{id}', 'TestimonialController@update');
//resume
Route::any('/resume', function () {
    return view('pages.resume');
});


// TODO

// 1) Auth
// 2) Editable and database driven projects
//    ProjectController -> Create/Edit/Delete model and routes -> Storage - > redo frontend
// 3) Editable sections
//    SectionControlller -> Create/Edit model and routes -> redo frontend

