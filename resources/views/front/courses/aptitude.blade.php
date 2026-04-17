@extends('front.layout.master')

@section('content')

<section class="py-5 bg-light">
<div class="container">

<div class="row">

<!-- Left Content -->
<div class="col-lg-8">

<h2 class="mb-3">Aptitude & Interview Preparation</h2>

<p class="text-muted">
Prepare for placements with aptitude, reasoning, and interview 
preparation including mock tests and real interview questions.
</p>

<img src="{{ asset('assets/images/courses_images/aptitude.png') }}" 
class="course-banner mb-4">

<!-- Course Overview -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Overview</h4>

<p>
This course helps students prepare for aptitude tests, reasoning, 
technical interviews, and HR interviews for placements.
</p>

</div>
</div>

<!-- Preview Video -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Preview</h4>

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/aptitude-preview.mp4') }}">
</video>
</div>

</div>
</div>

<!-- Course Curriculum -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Curriculum</h4>

<div class="accordion" id="aptitudeAccordion">

<!-- Module 1 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#apt1">
Quantitative Aptitude
</button>
</h2>

<div id="apt1" class="accordion-collapse collapse show">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/aptitude-quant.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 2 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#apt2">
Logical Reasoning
</button>
</h2>

<div id="apt2" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/aptitude-reasoning.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 3 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#apt3">
Verbal Ability
</button>
</h2>

<div id="apt3" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/aptitude-verbal.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 4 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#apt4">
Technical Interview Questions
</button>
</h2>

<div id="apt4" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/aptitude-technical.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 5 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#apt5">
HR Interview Preparation
</button>
</h2>

<div id="apt5" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/aptitude-hr.mp4') }}">
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

<p>Test your aptitude skills</p>

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

<li>30+ Videos</li>
<li>Mock Tests</li>
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