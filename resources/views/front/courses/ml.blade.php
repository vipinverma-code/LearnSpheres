@extends('front.layout.master')

@section('content')

<section class="py-5 bg-light">
<div class="container">

<div class="row">

<!-- Left Content -->
<div class="col-lg-8">

<h2 class="mb-3">Machine Learning Master Course</h2>

<p class="text-muted">
Learn Machine Learning from basics to advanced including 
real-world projects and AI fundamentals.
</p>

<img src="{{ asset('assets/images/courses_images/ml.png') }}" 
class="course-banner mb-4">

<!-- Course Overview -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Overview</h4>

<p>
This course introduces Machine Learning concepts, algorithms, 
and real-world applications using practical examples.
</p>

</div>
</div>

<!-- Preview Video -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Preview</h4>

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/ml-preview.mp4') }}">
</video>
</div>

</div>
</div>

<!-- Course Curriculum -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Curriculum</h4>

<div class="accordion" id="mlAccordion">

<!-- Module 1 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#ml1">
Introduction to Machine Learning
</button>
</h2>

<div id="ml1" class="accordion-collapse collapse show">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/ml-intro.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 2 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ml2">
Supervised Learning
</button>
</h2>

<div id="ml2" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/ml-supervised.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 3 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ml3">
Unsupervised Learning
</button>
</h2>

<div id="ml3" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/ml-unsupervised.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 4 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ml4">
Model Evaluation
</button>
</h2>

<div id="ml4" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/ml-evaluation.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 5 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#ml5">
Final Project
</button>
</h2>

<div id="ml5" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/ml-project.mp4') }}">
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

<p>Test your Machine Learning knowledge</p>

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