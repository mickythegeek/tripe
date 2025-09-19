<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripe | Reset Password</title>
    <link rel="icon" type="images/x-icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    <!-- remix icon  -->
    <link rel="stylesheet" href="{{ asset('backend/assetscss/remixicon.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/swiper-bundle.min.css') }}" />
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.min.css') }}">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarCollapse">


    <section class="section login-section bg-light">
        <div class="bg-overlay-2"></div>
        <div class="container">
            <div class="login-content bg-primary py-5 px-2 rounded-4">
                <div class="row align-items-center justify-content-evenly">

                    <div class="col-lg-5">
                        <div class="card border-0 rounded-4">
                            <div class="card-body">
                                <div class="text-center mt-3">
                                    <div class="login-title">
                                        <h3
                                            class="text-primary fw-semibold text-decoration-underline link-underline-success">
                                            Forgot Password</h3>
                                            
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="alert alert-warning  text-center"
                                        role="alert">
                                        <p>Enter your email address and we'll
                                        send you an email with a password reset link.</p>
                                        @if (session('success'))
                                        <div class="alert alert-success" style="width: 410px">
                                            <div class="alert-content">
                                                <span class="alert-icon">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 20 20" aria-hidden="true" height="1em"
                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                                <div> {{ (session('success')) }} </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-success" style="width: 410px">
                                            <div class="alert-content">
                                                <span class="alert-icon">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 20 20" aria-hidden="true" height="1em"
                                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                                <div> {{ (session('error')) }} </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-info" style="width: 410px">
                                                <div class="alert-content">
                                                    <span class="alert-icon">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 20 20" aria-hidden="true" height="1em"
                                                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                    <div> {{ $error }} </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                        
                                    </div>
                                    <form action="{{route('admin_forgot_password_submit')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="email"
                                                class="form-control" id="email"
                                                placeholder="Enter Email"
                                                >
                                        </div>
                                        <div class="d-grid mt-3">
                                            <button type="submit"
                                                class="btn btn-primary">Reset
                                                your
                                                Password</button>
                                        </div>
                                    </form>
                                    <p class="mt-4 text-center">Back To <a
                                            href="{{route('admin_login')}}"
                                            class="text-primary">Login
                                            !</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <div class="home-icon position-absolute">
            <a href="index-1.html" class="text-light"><i
                    class="ri-home-4-fill align-middle"></i></a>
        </div>
    </section>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>