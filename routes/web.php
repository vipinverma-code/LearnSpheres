<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\MentorController;



Route::post('/contact-submit', [ContactController::class, 'submit'])
    ->name('contact.submit');

Route::view('/', 'front.home');
Route::view('/home', 'front.home')->name('home');
Route::view('/about', 'front.about_us')->name('about');
Route::view('/courses', 'front.courses')->name('courses');
Route::view('/contact', 'front.contactus')->name('contact');
Route::view('/sign-in', 'front.signin')->name('signin');
Route::view('/sign-up', 'front.signup')->name('signup');
Route::get('/mentors', function () {
    return view('mentors.index');
})->name('mentor.index');




Route::middleware('auth')->group(function () {

    Route::get('/student/dashboard', function () {
        return "Welcome to Student Dashboard 🎓";
    })->name('student.dashboard');

    Route::get('/instructor/dashboard', function () {
        return "Welcome to Instructor Dashboard 👨‍🏫";
    })->name('instructor.dashboard');

    Route::get('/mentor/dashboard', function () {
        return "Welcome to Mentor Dashboard 🧠";
    })->name('mentor.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// For Chatbot

Route::middleware('auth')->get('/chatbot', function () {
    return view('chatbot.index');
})->name('chatbot');

Route::post('/ask-ai', [ChatbotController::class, 'ask'])->middleware('auth');

// courses_categories ke routes 

Route::view('/course/web', 'front.courses.web')->name('courses.web');
Route::view('/course/python', 'front.courses.python')->name('courses.python');
Route::view('/course/dsa', 'front.courses.dsa')->name('courses.dsa');
Route::view('/course/dbms', 'front.courses.dbms')->name('courses.dbms');
Route::view('/course/ml', 'front.courses.ml')->name('courses.ml');
Route::view('/course/aptitude', 'front.courses.aptitude')->name('courses.aptitude');
// Mentor routes

Route::get('/mentors', [MentorController::class, 'index'])->name('mentor.index');
Route::get('/mentor/book/{id}', [MentorController::class, 'book'])->name('mentor.book');
Route::post('/mentor/store', [MentorController::class, 'store'])->name('mentor.store');

require __DIR__.'/auth.php';
