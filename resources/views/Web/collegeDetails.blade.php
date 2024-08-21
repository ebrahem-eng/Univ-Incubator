<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More - University Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('webAssets/styles.css') }}">
</head>

<body>

    @if(Auth::guard('userS')->user())

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black py-3 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('webAssets/images/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
                <span class="fw-bold fs-4">University Incubator</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-orange fw-semibold" href="{{route('web.index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#universities">Universities</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{route('web.question.index')}}">Question</a></li>
                </ul>
                <!-- User Profile Section -->
                <ul class="navbar-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light d-flex align-items-center" href="#" id="userDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset(Auth::guard('userS')->user()->img) }}" alt="User Photo" width="30" height="30" class="rounded-circle me-2">
                            <span>{{ Auth::guard('userS')->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="{{route('web.logout')}}">Logout</a></li>
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
                    <li class="nav-item"><a class="nav-link text-orange fw-semibold" href="{{route('web.index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#universities">Universities</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{route('web.login')}}">Login</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{route('web.register')}}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
        
    @endif

    <!-- University Image and Detailed Description -->
    <section id="university-info" class="py-5">
        <div class="container">
            <!-- University Image -->
            <div class="row mb-4">
                <div class="col-12">
                    <img src="{{ asset($universityCollege->collegeImage) }}" class="img-fluid w-100 rounded shadow-sm"
                        alt="University Image">
                </div>
            </div>

            <!-- College Description -->
            <div class="row">
                <div class="col-12 text-center text-md-start">
                    <h2 class="text-orange fw-bold mb-4">{{ $universityCollege->collegeName }}</h2>
                    <p class="lead mb-3">
                        {{ $universityCollege->details }}
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- Teaching Staff Section -->
    <section id="teaching-staff" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-orange mb-5">Teaching Staff</h2>
            <div id="staffCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- Staff Member 1 -->

                    @foreach ($teachingStaffs as $teachingStaff)
                        <div class="carousel-item active">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset($teachingStaff->img) }}" class="d-block w-100 rounded shadow-sm"
                                        alt="Staff Member 1">
                                </div>
                                <div
                                    class="col-md-8 d-flex flex-column justify-content-center bg-white p-4 rounded-end shadow-sm">
                                    <h5 class="text-orange fw-bold">
                                        {{ $teachingStaff->Designation }}.{{ $teachingStaff->name }}</h5>
                                    <p class="text-muted">{{ $teachingStaff->Designation }}.{{ $teachingStaff->name }}
                                        is a professor of Computer Science with over 20 years of experience in teaching
                                        and research.</p>
                                    <p class="small text-muted">Specialization: Artificial Intelligence</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Add more staff members as needed -->
                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#staffCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#staffCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>



    <!-- Specialization Section -->
    <section id="specializations" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-orange mb-5">Specializations</h2>
            <div id="specializationCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#specializationCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#specializationCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#specializationCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#specializationCarousel" data-bs-slide-to="3"></li>
                    <!-- Add more indicators as needed -->
                </ol>
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row">

                            @foreach ($specializationColleges as $specializationCollege)
                                <div class="col-md-4">
                                    <div class="card shadow-sm mb-4 border-0">
                                        <img src="{{ asset($specializationCollege->img) }}"
                                            class="card-img-top rounded-top" style="height: 150px;"
                                            alt="Specialization 1">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ $specializationCollege->name }}</h5>
                                            <p class="card-text text-muted text-truncate-clamp">
                                                {{ $specializationCollege->details }}</p>
                                            <a href="specialization-details.html"
                                                class="btn btn-orange btn-block">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#specializationCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#specializationCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>


    <!-- Ads Section -->
    <section id="ads" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-orange mb-5">Featured Ads</h2>
            <div id="adCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- Ad 1 -->
                    @foreach ($collegeAds as $collegeAd)
                        <div class="carousel-item active">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset($collegeAd->img) }}" class="d-block w-100 rounded shadow-sm"
                                        alt="Ad 1">
                                </div>
                                <div
                                    class="col-md-8 d-flex flex-column justify-content-center bg-white p-4 rounded-end shadow-sm">
                                    <h5 class="text-orange fw-bold">{{ $collegeAd->title }}</h5>
                                    <p class="text-muted">{{ $collegeAd->body }}</p>
                                    <p class="small text-muted">{{ $collegeAd->details }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Add more ads as needed -->
                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#adCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#adCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>


    <!-- Event Section -->
    <section id="events" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-orange mb-5">Upcoming Events</h2>
            <div id="eventCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- Event 1 -->

                    @foreach ($collegeEvents as $collegeEvent)
                        <div class="carousel-item active">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    @foreach ($collegeEvent->eventImage as $eventImages)
                                        <img src="{{ asset($eventImages->img) }}"
                                            class="d-block w-100 rounded shadow-sm" alt="Event 1">
                                    @endforeach
                                </div>
                                <div
                                    class="col-md-8 d-flex flex-column justify-content-center bg-white p-4 rounded-end shadow-sm">
                                    <h5 class="text-orange fw-bold">{{ $collegeEvent->name }}</h5>
                                    <p class="text-muted">{{ $collegeEvent->details }}</p>
                                    <p class="small text-muted">Date: {{ $collegeEvent->dayName }} -
                                        {{ $collegeEvent->eventDate }} - {{ $collegeEvent->eventTime }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Add more events as needed -->
                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#eventCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#eventCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
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
</body>

</html>
