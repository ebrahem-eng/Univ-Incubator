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
                    <img src="{{ asset($university->img) }}" class="img-fluid w-100 rounded shadow-sm"
                        alt="University Image">
                </div>
            </div>

            <!-- University Description -->
            <div class="row">
                <div class="col-12 text-center text-md-start">
                    <h2 class="text-orange fw-bold mb-4">{{ $university->name }}</h2>
                    <p class="lead mb-3">
                        {{ $university->details }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- College Fees Section -->
    <section id="college-fees" class="py-5">
        <div class="container">
            <h2 class="text-center text-orange mb-5">College Fees</h2>
            <div id="feesCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach ($feesColleges as $index => $feesCollege)
                                <div class="col-md-4 mb-4">
                                    <div class="card shadow-sm border-0 h-100">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ $feesCollege->univCollege->collegeName }}
                                            </h5>
                                            <ul class="list-group list-group-flush">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Hourly Fee
                                                    <span>{{ $feesCollege->annualFeesNumber }} /
                                                        {{ $feesCollege->details }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Hourly Fee Writing
                                                    <span>{{ $feesCollege->annualFees }}</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    Fee Date
                                                    <span>{{ $feesCollege->annualFeesDate }}</span>
                                                </li>
                                            </ul>
                                            <a href="fee-details.html" class="btn btn-orange mt-3 d-block">Learn
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                @if (($index + 1) % 3 == 0 && !$loop->last)
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#feesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#feesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>



    <!-- College Section -->
    <section id="colleges" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-orange mb-5">Colleges</h2>
            <div id="collegeCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach ($colleges as $index => $college)
                                <div class="col-md-4 mb-4">
                                    <div class="card shadow-sm h-100 border-0">
                                        <img src="{{ asset($college->collegeImage) }}"
                                            class="card-img-top rounded-top" style="height: 150px; object-fit: cover;"
                                            alt="{{ $college->collegeName }}">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title fw-bold">{{ $college->collegeName }}</h5>
                                            <p class="card-text text-muted flex-grow-1">
                                                {{ Str::limit($college->details, 100) }}</p>
                                            <a href="{{ route('web.college.details', $college->id) }}"
                                                class="btn btn-orange mt-auto">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                @if (($index + 1) % 3 == 0 && !$loop->last)
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#collegeCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#collegeCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
                    @foreach ($universityAds as $universityAd)
                        <div class="carousel-item active">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset($universityAd->img) }}" class="d-block w-100 rounded shadow-sm"
                                        alt="Ad 1">
                                </div>
                                <div
                                    class="col-md-8 d-flex flex-column justify-content-center bg-white p-4 rounded-end shadow-sm">
                                    <h5 class="text-orange fw-bold">{{ $universityAd->title }}</h5>
                                    <p class="text-muted">{{ $universityAd->body }}</p>
                                    <p class="small text-muted">{{ $universityAd->details }}</p>
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
                    @foreach ($univEvents as $index => $univEvent)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row g-0">
                                <div class="col-md-4 position-relative">
                                    <!-- Inner Carousel for Event Images -->
                                    <div id="eventImageCarousel{{ $index }}" class="carousel slide"
                                        data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($univEvent->university as $universityIndex => $university)
                                                @foreach ($university->eventImage as $imageIndex => $eventImage)
                                                    <div
                                                        class="carousel-item {{ $universityIndex === 0 && $imageIndex === 0 ? 'active' : '' }}">
                                                        <img src="{{ asset($eventImage->img) }}"
                                                            class="d-block w-100 rounded shadow-sm" alt="Event Image">
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                        <!-- Controls for Event Images Carousel -->
                                        @if (count($univEvent->university) > 1 || count($univEvent->university[0]->eventImage) > 1)
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#eventImageCarousel{{ $index }}"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#eventImageCarousel{{ $index }}"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                                <div
                                    class="col-md-8 d-flex flex-column justify-content-center bg-white p-4 rounded-end shadow-sm">
                                    <h5 class="text-orange fw-bold">{{ $univEvent->name }}</h5>
                                    <p class="text-muted">{{ $univEvent->details }}</p>
                                    <p class="small text-muted">Date: {{ $univEvent->dayName }} -
                                        {{ $univEvent->eventDate }} - {{ $univEvent->eventTime }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Controls for Event Carousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </section>




    <!-- University Location Map -->
    <section id="location" class="py-5 bg-light">
        <div class="container">
            <h3 class="text-center text-orange fw-bold mb-5">University Location</h3>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="map" class="map-container position-relative shadow-sm rounded overflow-hidden">
                        <iframe width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            class="border-0">
                        </iframe>
                        <div
                            class="map-overlay position-absolute top-0 left-0 w-100 h-100 d-flex justify-content-center align-items-center">
                            <div class="text-white text-center p-4">
                                <h5 class="fw-bold">Explore Our Campus Location</h5>
                                <p class="mb-0">Find us on the map and explore the area surrounding our university.
                                </p>
                            </div>
                        </div>
                    </div>
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

    <script>
        var map, marker;

        function initMap() {
            // The location of the user
            var myLatLng = {
                lat: parseFloat("{{ $location->latitude }}"),
                lng: parseFloat("{{ $location->longitude }}")
            }; // default location from the server

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: myLatLng
            });

            marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                draggable: false, // Make the marker non-draggable
                title: 'University Location'
            });

            // Set default values for latitude and longitude
            document.getElementById('latitude').value = myLatLng.lat;
            document.getElementById('longitude').value = myLatLng.lng;
        }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBddryhfLC4gYIvreVc9YDY4gLv2BrhhmY&callback=initMap"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
