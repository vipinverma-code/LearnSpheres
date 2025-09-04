<?php

use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','front.home');
Route::view('/home','front.about_us');
Route::view('/coursedetailsvideo','front.course_detailsvideo');
Route::view('/courselist','front.course-list-2');
Route::view('/SignIn','front.signin');
