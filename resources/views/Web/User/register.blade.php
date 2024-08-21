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
        <!-- Register Form -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center text-orange mb-4">Register</h2>
                        <form method="POST" action="{{route('web.register.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control rounded-pill" name="name" id="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Create a password" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Age</label>
                                <input type="number" class="form-control rounded-pill" id="email" name="age" placeholder="Enter Age" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Phone</label>
                                <input type="tel" class="form-control rounded-pill" id="email" name="phone" placeholder="Enter Phone Number" required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Choose Gender</label>
                                <select class="form-control rounded-pill" id="gender" name="gender" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="imageUpload" class="form-label">Upload Image</label>
                                <input type="file" class="form-control rounded-pill" id="imageUpload" name="img"  required>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-orange rounded-pill w-100">Register</button>
                        </form>
                        <p class="text-center mt-4">Already have an account? <a href="{{route('web.login')}}" class="text-orange">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
