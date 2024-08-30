<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('webAssets/styles.css')}}">
</head>
<body>

<!-- Background Image with Blur Effect -->
<div class="bg-image"></div>

<!-- Content Wrapper -->
<div class="content-wrapper d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <!-- Login Form -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center text-orange mb-4">Login</h2>
                        <form method="POST" action="{{route('web.login.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-orange rounded-pill w-100">Login</button>
                        </form>
                        <p class="text-center mt-4">Don't have an account? <a href="{{route('web.register')}}" class="text-orange">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
