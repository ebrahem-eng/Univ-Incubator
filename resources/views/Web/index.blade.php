<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('webAssets/styles.css') }}">
</head>

<body>

    @if (Auth::guard('userS')->user())
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black py-3 shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('webAssets/images/logo.png') }}" alt="Logo" width="40" height="40"
                        class="me-2">
                    <span class="fw-bold fs-4">University Incubator</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-orange fw-semibold"
                                href="{{ route('web.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#universities">Universities</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link text-light"
                                href="{{ route('web.question.index') }}">Question</a></li>
                    </ul>
                    <!-- User Profile Section -->
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light d-flex align-items-center" href="#"
                                id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset(Auth::guard('userS')->user()->img) }}" alt="User Photo"
                                    width="30" height="30" class="rounded-circle me-2">
                                <span>{{ Auth::guard('userS')->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="{{ route('web.logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @else
        <!-- Top Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black py-3 shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('webAssets/images/logo.png') }}" alt="Logo" width="40" height="40"
                        class="me-2">
                    <span class="fw-bold fs-4">University Incubator</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-orange fw-semibold"
                                href="{{ route('web.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#universities">Universities</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="{{ route('web.login') }}">Login</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-light"
                                href="{{ route('web.register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif


    {{-- Message Section --}}
    @if (session('success_message'))
        <div class="alert alert-success alert-dismissible fade show custom-alert-success" role="alert">
            {{ session('success_message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error_message'))
        <div class="alert alert-danger alert-dismissible fade show custom-alert-danger" role="alert">
            {{ session('error_message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- End Message Section --}}



    <!-- Search Field with Filter -->
    <div class="container-fluid bg-light py-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="d-flex align-items-center" method="POST"
                    action="{{ route('web.search.univeristy') }}">
                    @csrf
                    <select class="form-select rounded-pill me-2" aria-label="Filter" name="type" required>
                        <option>Filter by</option>
                        <option value="0">Public</option>
                        <option value="1">Private</option>
                        <option value="2">Virtual</option>
                    </select>
                    <input class="form-control rounded-pill me-2" type="search" placeholder="Search universities"
                        aria-label="Search" name="universityName" required>
                    <button class="btn btn-orange rounded-pill px-4" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Search Results Section -->
    @if (session('search_result'))
        <div class="container my-5">
            <h2 class="text-center mb-4">Search Results</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Display each university -->
                @foreach (session('search_result') as $university)
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="{{ asset($university->img) }}" class="card-img-top"
                                alt="{{ $university->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $university->name }}</h5>
                                <p class="card-text">Location: {{ $university->address->city }}</p>
                                <p class="card-text">Type:
                                    @if ($university->type == 0)
                                        Public
                                    @elseif($university->type == 1)
                                        Private
                                    @else
                                        Virtual
                                    @endif
                                </p>
                                <p class="card-text text-muted text-truncate-clamp">Details:
                                    {{ $university->details }}</p>
                                <a href="{{ route('web.university.details', $university->id) }}"
                                    class="btn btn-orange rounded-pill">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif




    <!-- Slider -->
    <div id="universityCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#universityCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#universityCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#universityCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('webAssets/images/univ1.jpg') }}" class="d-block w-100" alt="University 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-4">University 1</h5>
                    <p>Excellence in education, innovation in research.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('webAssets/images/univ2.jpg') }}" class="d-block w-100" alt="University 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-4">University 2</h5>
                    <p>Shaping the leaders of tomorrow.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('webAssets/images/univ3.jpg') }}" class="d-block w-100" alt="University 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="display-4">University 3</h5>
                    <p>A tradition of excellence in higher education.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#universityCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#universityCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>


    <!-- About Us -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('webAssets/images/about.jpg') }}" alt="About Us"
                        class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="text-orange fw-bold mb-4">About Us</h2>
                    <p class="lead mb-3">At University Incubator, we empower students to make informed decisions about
                        their education. Our platform offers in-depth comparisons, reviews, and insights on universities
                        worldwide.</p>
                    <p>We are committed to helping students find the best universities that align with their goals,
                        passions, and future aspirations. Our mission is to simplify the university selection process,
                        providing all the necessary tools and information in one place.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Universities Section -->
    <section id="universities" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-orange mb-5">Universities</h2>
            <div id="universityCarousel" class="carousel slide">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- Single Slide containing all universities -->
                    <div class="carousel-item active">
                        <div class="row flex-nowrap">
                            @foreach ($universities as $university)
                                <div class="col-md-4">
                                    <div class="card shadow-sm mb-4 border-0">
                                        <img src="{{ asset($university->img) }}" class="card-img-top rounded-top"
                                            style="height: 150px;" alt="University 1">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ $university->name }}</h5>
                                            <p class="card-text text-muted text-truncate-clamp">
                                                {{ $university->details }}</p>
                                            <a href="{{ route('web.university.details', $university->id) }}"
                                                class="btn btn-orange btn-block">Learn
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev custom-control-prev" href="#universityCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next custom-control-next" href="#universityCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>



    <!-- Complaint Form -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-orange mb-5">Add Question</h2>
            <div class="row align-items-center">
                <!-- Form Column -->
                <div class="col-md-6">
                    <form method="POST" action="{{ route('web.question.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Question</label>
                            <input type="text" class="form-control rounded-pill" name="question" id="name"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Details</label>
                            <textarea class="form-control rounded-pill" id="message" rows="6" name="details" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-orange rounded-pill px-4">Submit</button>
                    </form>
                </div>
                <!-- Image Column -->
                <div class="col-md-6">
                    <img src="{{ asset('webAssets/images/question.jpg') }}" class="img-fluid rounded"
                        alt="Complaint Image">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-black text-white text-center py-5">
        <div class="container">
            <p class="mb-3">&copy; 2024 University Finder. All Rights Reserved.</p>
            <div class="social-icons mb-3">
                <a href="#" class="text-orange me-3"><i class="fa fa-facebook-f"></i></a>
                <a href="#" class="text-orange me-3"><i class="fa fa-twitter"></i></a>
                <a href="#" class="text-orange me-3"><i class="fa fa-linkedin-in"></i></a>
                <a href="#" class="text-orange me-3"><i class="fa fa-instagram"></i></a>
            </div>
            <p class="mb-0">Designed with passion by <a href="#" class="text-orange">Your Name</a></p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
