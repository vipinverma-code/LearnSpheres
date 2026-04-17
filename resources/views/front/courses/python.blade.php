@extends('front.layout.master')

@section('content')

<section class="py-5 bg-light">
<div class="container">

<div class="row">

<!-- Left Content -->
<div class="col-lg-8">

<h2 class="mb-3">Python Programming Master Course</h2>

<p class="text-muted">
Learn Python programming from beginner to advanced level including 
real-world projects, automation, and data handling.
</p>

<img src="{{ asset('assets/images/courses_images/python.jpg') }}" 
class="img-fluid course-banner mb-4">

<!-- Course Overview -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Overview</h4>

<p>
This course covers complete Python programming including basics, 
OOP concepts, file handling, and project-based learning.
</p>

</div>
</div>

<!-- Preview Video -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Preview</h4>

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/python-preview.mp4') }}" type="video/mp4">
</video>
</div>

</div>
</div>

<!-- Course Curriculum -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Curriculum</h4>

<div class="accordion" id="pythonAccordion">

<!-- Module 1 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#py1">
Introduction to Python
</button>
</h2>

<div id="py1" class="accordion-collapse collapse show">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/python-intro.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 2 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#py2">
Python Basics
</button>
</h2>

<div id="py2" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/python-basics.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 3 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#py3">
Functions & OOP
</button>
</h2>

<div id="py3" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/python-oop.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 4 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#py4">
File Handling
</button>
</h2>

<div id="py4" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/python-file.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 5 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#py5">
Final Project
</button>
</h2>

<div id="py5" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/python-project.mp4') }}">
</video>
</div>

</div>
</div>
</div>

</div>

</div>
</div>


<!-- Quiz -->
<div class="card mb-4">
<div class="card-body">

<h4>Quiz</h4>

<p>Test your Python knowledge</p>

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


<!-- Sidebar -->
<div class="col-lg-4">

<div class="card shadow">
<div class="card-body">

<h5>Course Includes</h5>

<ul>

<li>25+ Videos</li>
<li>Assignments</li>
<li>Quiz</li>
<li>Certificate</li>
<li>Lifetime Access</li>

</ul>

<button class="btn btn-primary w-100">
Enroll Now
</button>

</div>

</div>

</div>

</div>

</div>
</section>

@endsection