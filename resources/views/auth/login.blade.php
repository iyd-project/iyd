{{-- @extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Sign In</h3>
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group form-floating-label">
                        <input id="email" name="email" type="email" class="form-control input-border-bottom"
                            required />
                        <label for="email" class="placeholder">Email</label>
                    </div>
                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom"
                            required />
                        <label for="password" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>
                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
                    </div>
                </form>
                <div class="login-account">
                    <span class="msg">Don't have an account? Click here to </span>
                    <a href="{{ route('register') }}" class="link">Sign Up Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'In Your Dream')</title>
    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <style>
        /* Background and overall styling */
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .left-side {
            position: relative;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            text-align: center;
            overflow: hidden;
        }

        /* Background image styling */
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            filter: blur(3px);
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .background-image.active {
            opacity: 1;
        }

        /* Gradient overlay for the blur effect */
        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom,
                    rgba(0, 0, 0, 0.5),
                    rgba(255, 255, 255, 0.2));
        }

        .right-side {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color: #ffffff;
        }

        /* Logo */
        .logo-container {
            position: relative;
            z-index: 2;
            /* Ensures the logo is above the background images */
        }

        .logo-container img {
            width: 120px;
        }

        /* Form styling */
        .form-title {
            font-size: 2rem;
            font-weight: bold;
            color: black;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #000;
            border-radius: 0;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #2a0848;
            box-shadow: none;
        }

        /* Button styling */
        .btn-signup {
            background: linear-gradient(to right, #000000, #b59f78);
            color: white;
            border: none;
        }

        .btn-signup:hover {
            background: linear-gradient(to right, #a08fb5, #000000);
        }

        .social-btn {
            background-color: #ffffff;
            border: 1px solid #a08fb5;
            color: #000000;
            width: 100%;
            text-align: center;
            margin-top: 10px;
        }

        .social-btn:hover {
            background-color: #a08fb5;
            color: #b59f78;
        }

        /* Additional text and links */
        .text-muted {
            font-size: 0.9rem;
        }

        .text-muted a {
            color: black;
            text-decoration: none;
        }

        .text-muted a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Left side with background image and logo -->
        <div class="left-side">
            <!-- Background images for slideshow -->
            <div class="background-image active"
                style="
                    background-image: url('https://i.pinimg.com/736x/65/09/7e/65097ec2a4551f628447e57865ef6127.jpg');
                ">
            </div>
            <div class="background-image"
                style="
                    background-image: url('https://i.pinimg.com/736x/9b/6b/8f/9b6b8fdbc6ceeb9851186022bf7f4dd0.jpg');
                ">
            </div>
            <div class="background-image"
                style="
                    background-image: url('https://i.pinimg.com/736x/8a/90/7b/8a907b773292b117c422334f3bd30bf7.jpg');
                ">
            </div>
            <div class="gradient-overlay"></div>

            <!-- Logo container -->
            <div class="logo-container">
                <img src="{{ asset('assets/img/logo.png') }}" class="mb-3" alt="IN YOUR DREAM Logo" />
                <h3>IN YOUR DREAM</h3>
            </div>
        </div>

        <!-- Right side with form -->
        <div class="right-side">
            <h3 class="form-title">Sign In</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mt-4">
                    <div class="input-group">
                        <input type="email" class="form-control border-secondary" name="email" placeholder="Email"
                            value="{{ old('email') }}" />
                    </div>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group mt-3">
                    <div class="input-group">
                        <input type="password" class="form-control border-secondary" name="password"
                            placeholder="Password" required />
                    </div>
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <!-- Sign Up Button -->
                <button type="submit" class="btn btn-signup w-100">
                    Sign In
                </button>

                <!-- Additional links and social sign-up -->
                <p class="mt-3 text-center text-muted">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="link">Sign Up Now</a>
                </p>

                <div class="d-flex align-items-center my-3">
                    <hr class="flex-grow-1" />
                    <span class="px-3 text-muted">or</span>
                    <hr class="flex-grow-1" />
                </div>

                <!-- Google Sign-Up Button -->
                <button type="button" class="btn social-btn">
                    <i class="bi bi-google"></i> Sign Up with Google
                </button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // JavaScript for background slideshow
            let images = document.querySelectorAll(".background-image");
            let currentIndex = 0;

            function showNextImage() {
                images[currentIndex].classList.remove("active");
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add("active");
            }

            setInterval(showNextImage, 2000);
            // Change image every 5 seconds
        </script>
</body>

</html>
