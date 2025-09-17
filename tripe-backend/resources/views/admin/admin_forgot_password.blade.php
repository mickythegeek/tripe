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
                                        Enter your email address and we'll
                                        send you an email with a password reset link.
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="email">Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email"
                                                class="form-control" id="email"
                                                placeholder="Enter Email"
                                                required>
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