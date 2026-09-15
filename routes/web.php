<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/about-me','about-me');
Route::view('/projects', 'projects');
Route::view('/education', 'education');
Route::view('/contact-me','contact-me');
Route::view('/story', 'story');