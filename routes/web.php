<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
    //     return view('welcome');
    // });
// Route::redirect('SignIn','   signin');
Route::view('/', 'front.home');
Route::view('/home', 'front.home')->name('home');
Route::view('/about', 'front.about_us')->name('about');
Route::view('/courses','front.courses')->name('courses');
Route::view('/contact','front.contactus')->name('contact');
Route::view('/signin', 'front.signin')->name('signin');
Route::view('/signup', 'front.signup')->name('signup');
Route::view('/Admin','admin.admin')->name('Admin');


