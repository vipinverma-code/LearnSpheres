@extends('front.layout.master')

@section('content')

<section class="py-5 bg-light">
<div class="container">

<div class="row">

<!-- Left Content -->
<div class="col-lg-8">

<h2 class="mb-3">Database Management System (DBMS)</h2>

<p class="text-muted">
Learn Database Management System including SQL, normalization, 
and real-world database design concepts.
</p>

<img src="{{ asset('assets/images/courses_images/dbms.png') }}" 
class="img-fluid course-banner mb-4">

<!-- Course Overview -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Overview</h4>

<p>
This course covers relational databases, SQL queries, normalization, 
and database design concepts used in real-world applications.
</p>

</div>
</div>

<!-- Preview Video -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Preview</h4>

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dbms-preview.mp4') }}">
</video>
</div>

</div>
</div>

<!-- Course Curriculum -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Curriculum</h4>

<div class="accordion" id="dbmsAccordion">

<!-- Module 1 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#dbms1">
Introduction to DBMS
</button>
</h2>

<div id="dbms1" class="accordion-collapse collapse show">
<div class="accordion-body">
<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dbms-intro.mp4') }}">
</video>
</div>
</div>
</div>
</div>

<!-- Module 2 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dbms2">
SQL Basics
</button>
</h2>

<div id="dbms2" class="accordion-collapse collapse">
<div class="accordion-body">
<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dbms-sql.mp4') }}">
</video>
</div>
</div>
</div>
</div>

<!-- Module 3 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dbms3">
Normalization
</button>
</h2>

<div id="dbms3" class="accordion-collapse collapse">
<div class="accordion-body">
<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dbms-normalization.mp4') }}">
</video>
</div>
</div>
</div>
</div>

<!-- Module 4 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dbms4">
Joins & Queries
</button>
</h2>

<div id="dbms4" class="accordion-collapse collapse">
<div class="accordion-body">
<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dbms-joins.mp4') }}">
</video>
</div>
</div>
</div>
</div>

<!-- Module 5 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dbms5">
Final Project
</button>
</h2>

<div id="dbms5" class="accordion-collapse collapse">
<div class="accordion-body">
<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dbms-project.mp4') }}">
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

<p>Test your DBMS knowledge</p>

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

<li>20+ Videos</li>
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