<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'front.home');
Route::view('/home', 'front.home');
Route::view('/about', 'front.about_us');
Route::view('/courses','front.courses');
Route::view('/contact','front.contactus');
// Route::view('/coursedetailsvideo', 'front.course_detailsvideo');
// Route::view('/courselist', 'front.course-list-2');
// Route::view('/SignIn', 'front.signin');
// Route::view('/SignUp', 'front.signup_page');
