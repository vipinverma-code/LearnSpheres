<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'front.home');
Route::view('/home', 'front.home')->name('home');
Route::view('/about', 'front.about_us')->name('about');
Route::view('/courses','front.courses')->name('courses');
Route::view('/contact','front.contactus')->name('contact');
Route::view('/SignIn','front.signin')->name('SignIn');
Route::view('/SignUp','front.signup')->name('SignUp');



