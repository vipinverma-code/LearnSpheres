<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'front.home');
Route::view('/home', 'front.home')->name('home');
Route::view('/about', 'front.about_us');
Route::view('/courses','front.courses');
Route::view('/contact','front.contactus');
Route::view('/SignIn','front.signin');
Route::view('/SignUp','front.signup');



