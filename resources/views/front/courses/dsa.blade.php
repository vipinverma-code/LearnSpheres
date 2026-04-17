@extends('front.layout.master')

@section('content')

<section class="py-5 bg-light">
<div class="container">

<div class="row">

<!-- Left Content -->
<div class="col-lg-8">

<h2 class="mb-3">Data Structures & Algorithms Master Course</h2>

<p class="text-muted">
Master Data Structures and Algorithms for coding interviews 
and problem-solving with real-world examples.
</p>

<img src="{{ asset('assets/images/courses_images/dsa.png') }}" 
class="img-fluid course-banner mb-4">

<!-- Course Overview -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Overview</h4>

<p>
This course covers fundamental to advanced data structures 
and algorithms to help you crack coding interviews and 
improve problem-solving skills.
</p>

</div>
</div>

<!-- Preview Video -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Preview</h4>

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dsa-preview.mp4') }}">
</video>
</div>

</div>
</div>

<!-- Course Curriculum -->
<div class="card mb-4">
<div class="card-body">

<h4>Course Curriculum</h4>

<div class="accordion" id="dsaAccordion">

<!-- Module 1 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#dsa1">
Introduction to DSA
</button>
</h2>

<div id="dsa1" class="accordion-collapse collapse show">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dsa-intro.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 2 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dsa2">
Arrays & Strings
</button>
</h2>

<div id="dsa2" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dsa-array.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 3 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dsa3">
Linked List
</button>
</h2>

<div id="dsa3" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dsa-linkedlist.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 4 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dsa4">
Stacks & Queues
</button>
</h2>

<div id="dsa4" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dsa-stack.mp4') }}">
</video>
</div>

</div>
</div>
</div>

<!-- Module 5 -->
<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#dsa5">
Final Interview Questions
</button>
</h2>

<div id="dsa5" class="accordion-collapse collapse">
<div class="accordion-body">

<div class="ratio ratio-16x9">
<video controls>
<source src="{{ asset('assets/videos/dsa-project.mp4') }}">
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

<p>Test your DSA knowledge</p>

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