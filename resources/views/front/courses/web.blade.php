@extends('front.layout.master')

@section('content')

<section class="py-5 bg-light">
<div class="container">

<div class="row">

<!-- Left Content -->
<div class="col-lg-8">

<h2 class="mb-3">Web Development Master Course</h2>

<p class="text-muted">
Learn complete Web Development from beginner to advanced level 
including HTML, CSS, JavaScript and Laravel.
</p>

<img src="{{ asset('assets/images/courses_images/web.png') }}" 
class="img-fluid rounded mb-4">

<!-- Course Overview -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Overview</h4>

<p>
This course covers complete web development including frontend and backend.
You will build real world projects and gain practical experience.
</p>

</div>
</div>


<!-- Preview Video -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Preview</h4>

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/web-preview.mp4') }}" type="video/mp4">
</video>
</div>

</div>
</div>


<!-- Course Curriculum -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Curriculum</h4>

<ul class="list-group">

<li class="list-group-item">
Introduction to Web Development
</li>

<li class="list-group-item">
HTML & CSS Basics
</li>

<li class="list-group-item">
JavaScript Fundamentals
</li>

<li class="list-group-item">
Laravel Backend
</li>

<li class="list-group-item">
Final Project
</li>

</ul>

</div>
</div>


<!-- Quiz Section -->
<div class="card mb-4">
<div class="card-body">

<h4>Quiz</h4>

<p>Test your knowledge with quizzes</p>

<button class="btn btn-outline-primary">
Start Quiz
</button>

</div>
</div>


<!-- Certificate -->
<div class="card mb-4">
<div class="card-body">

<h4>Certificate</h4>

<p>Complete course and get certificate</p>

<button class="btn btn-success">
Generate Certificate
</button>

</div>
</div>

</div>


<!-- Right Sidebar -->
<div class="col-lg-4">

<div class="card shadow">
<div class="card-body">

<h5>Course Includes</h5>

<ul>

<li>20+ Videos</li>
<li>Assignments</li>
<li>Quiz</li>
<li>Certificate</li>
<li>Lifetime Access</li>

</ul>



</div>
</div>

</div>

</div>

</div>
</section>

@endsection