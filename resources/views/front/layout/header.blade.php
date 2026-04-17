<header class="navbar-light navbar-sticky">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/finallogo2.png') }}"
                    alt="logo">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('about') }}">About Us</a> --}}
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>

                    <!-- Dropdown For Join As -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="roleMenu" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Join As
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="roleMenu">
                            <li><a class="dropdown-item" href="{{ route('signup') }}">I am Instructor</a></li>
                            <li><a class="dropdown-item" href="{{ route('signup') }}">I am Student</a></li>
                            <li><a class="dropdown-item" href="{{ route('signup') }}">I am Mentor</a></li>

                        </ul>
                    </li>

                    {{-- AI Chatbot  --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chatbot') }}">
                            🤖 AI Tutor
                        </a>
                    </li>
                    {{-- Book Mentor option --}}

                    <li class="nav-item">
                        <a class="nav-link fw-bold text-primary" href="{{ route('mentor.index') }}">
                            🎯 Book a Mentor
                        </a>
                    </li>

                </ul>

                <!-- Right side (Auth buttons) -->
                <ul class="navbar-nav ms-auto">

                    @auth
                        <li class="nav-item d-flex align-items-center">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-danger">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="btn btn-outline-primary" href="{{ route('signup') }}">
                                Register
                            </a>
                        </li>
                    @endguest

                </ul>

            </div>
        </div>
    </nav>
</header>
