<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('webAssets/styles.css') }}">
    <style>
        /* Add this style */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
        }

        .fixed-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>

<body>
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
                            <img src="{{ asset(Auth::guard('userS')->user()->img) }}" alt="User Photo" width="30"
                                height="30" class="rounded-circle me-2">
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

    {{-- message Section --}}
    @if (session('success_message'))
        <div class="custom-alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('success_message') }}
        </div>
    @endif

    @if (session('error_message'))
        <div class="custom-alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('error_message') }}
        </div>
    @endif
    {{-- end message Section --}}

    <!-- Main content wrapper -->
    <main>
        <!-- Table Section -->
        <div class="container my-5">
            <h2 class="text-center mb-4">Your Question</h2>
            <table class="table table-striped table-hover" style="border-color: orange;">
                <thead style="background-color: orange; color: white;">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Question</th>
                        <th scope="col">Details</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Answered BY</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userQuestions as $userQuestion)
                        <tr style="color: black;">
                            <th scope="row">1</th>
                            <td>{{ $userQuestion->question }}</td>
                            <td>{{ $userQuestion->details }}</td>
                            <td>{{ $userQuestion->answer ?? '-' }}</td>
                            <td>{{ $userQuestion->LAdmin->name ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Table Section -->
    </main>

    <!-- Footer -->
    <footer class="fixed-footer bg-black text-white text-center py-5">
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
