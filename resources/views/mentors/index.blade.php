@extends('front.layout.master')

@section('content')
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Book a Mentor</h2>
            <p class="text-muted">Select mentor and book your session</p>
        </div>

        <div class="row g-4">

            <!-- Web Development -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-4 mentor-card">

                    <img src="{{ asset('assets/images/mentor1.png') }}" class="mentor-img mb-3">

                    <h5 class="fw-semibold">Rahul Sharma</h5>
                    <p class="text-muted mb-1">Full Stack Developer</p>
                    <p class="text-muted">Web Development</p>

                    <div class="d-flex justify-content-between mt-3">

                        <a href="https://wa.me/919876543210" class="btn btn-outline-success btn-sm">

                            Chat Now

                        </a>

                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookSessionModal">

                            Book Session

                        </button>

                    </div>

                </div>
            </div>


            <!-- Python -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-4 mentor-card">

                    <img src="{{ asset('assets/images/mentor2.png') }}" class="mentor-img mb-3">

                    <h5 class="fw-semibold">Amit Verma</h5>
                    <p class="text-muted mb-1">Python Developer</p>
                    <p class="text-muted">Python Programming</p>

                    <div class="d-flex justify-content-between mt-3">

                        <a href="https://wa.me/919876543211" class="btn btn-outline-success btn-sm">

                            Chat Now

                        </a>

                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookSessionModal">

                            Book Session

                        </button>

                    </div>

                </div>
            </div>


            <!-- DSA -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-4 mentor-card">

                    <img src="{{ asset('assets/images/mentor3.png') }}" class="mentor-img mb-3">

                    <h5 class="fw-semibold">Priya Singh</h5>
                    <p class="text-muted mb-1">DSA Expert</p>
                    <p class="text-muted">Data Structures & Algorithms</p>

                    <div class="d-flex justify-content-between mt-3">

                        <a href="https://wa.me/919876543212" class="btn btn-outline-success btn-sm">

                            Chat Now

                        </a>

                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookSessionModal">

                            Book Session

                        </button>

                    </div>

                </div>
            </div>


            <!-- DBMS -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-4 mentor-card">

                    <img src="{{ asset('assets/images/mentor4.png') }}" class="mentor-img mb-3">

                    <h5 class="fw-semibold">Rohit Gupta</h5>
                    <p class="text-muted mb-1">Database Engineer</p>
                    <p class="text-muted">Database Management</p>

                    <div class="d-flex justify-content-between mt-3">

                        <a href="#" class="btn btn-outline-success btn-sm">
                            Chat Now
                        </a>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookSessionModal">

                            Book Session

                        </button>

                    </div>

                </div>
            </div>


            <!-- Machine Learning -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-4 mentor-card">

                    <img src="{{ asset('assets/images/mentor5.png') }}" class="mentor-img mb-3">

                    <h5 class="fw-semibold">Neha Verma</h5>
                    <p class="text-muted mb-1">ML Engineer</p>
                    <p class="text-muted">Machine Learning</p>

                    <div class="d-flex justify-content-between mt-3">

                        <a href="#" class="btn btn-outline-success btn-sm">
                            Chat Now
                        </a>

                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookSessionModal">

                            Book Session

                        </button>

                    </div>

                </div>
            </div>


            <!-- Aptitude -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-4 mentor-card">

                    <img src="{{ asset('assets/images/mentor6.png') }}" class="mentor-img mb-3">

                    <h5 class="fw-semibold">Ankit Sharma</h5>
                    <p class="text-muted mb-1">Aptitude Trainer</p>
                    <p class="text-muted">Aptitude & Interview</p>

                    <div class="d-flex justify-content-between mt-3">

                        <a href="#" class="btn btn-outline-success btn-sm">
                            Chat Now
                        </a>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookSessionModal">

                            Book Session

                        </button>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- Book Session Modal -->

    <div class="modal fade" id="bookSessionModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Book Mentor Session</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <form>

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <div class="mb-3">
                            <label>Select Date</label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Select Slot</label>

                            <select class="form-control">
                                <option>10:00 AM - 11:00 AM</option>
                                <option>12:00 PM - 1:00 PM</option>
                                <option>3:00 PM - 4:00 PM</option>
                                <option>6:00 PM - 7:00 PM</option>
                            </select>

                        </div>

                        <button class="btn btn-primary w-100">
                            Book Session
                        </button>

                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
