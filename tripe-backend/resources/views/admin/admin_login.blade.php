<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renol</title>
    <link rel="icon" type="images/x-icon" href="{{asset('backend/assets/images/favicon.ico')}}">
    <!-- remix icon  -->
    <link rel="stylesheet" href=" {{asset('backend/assets/css/remixicon.css')}} ">
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/swiper-bundle.min.css')}} " />
    <!-- bootstrap  -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.min.css')}} ">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarCollapse">
    <section class="section login-section bg-light">
        <div class="bg-overlay-2"></div>
        <div class="container">
            <div class="login-content bg-primary py-5 px-2 rounded-4">
                <div class="row align-items-center justify-content-evenly">
                    <div class="col-lg-5">
                        <div class="card  border-0 rounded-4">
                            <div class="card-body">
                                <div class="text-center mt-3">
                                    <div class="login-title">
                                        <h3
                                            class="text-primary fw-semibold text-decoration-underline link-underline-success">
                                            Welcome, Super Admin!</h3>
                                    </div>
                                    <p class="text-muted pt-2 mb-0"><a
                                            href="signup.html"
                                            class="text-primary">
                                            </a> Please enter your credentials to login.</p>
                                </div>
                                <div class="p-4">
                                    <form>
                                        <div class="form-group">
                                            <label for="username">Username <span
                                                    class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control"
                                                id="username"
                                                placeholder="Enter username"
                                                required>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="userpassword">Password
                                                <span
                                                    class="text-danger">*</span></label>
                                            <input type="password"
                                                class="form-control"
                                                id="userpassword"
                                                placeholder="Enter password"
                                                required>
                                            <p>
                                                We'll never share your password
                                                with
                                                anyone else.
                                            </p>
                                        </div>
                                        <div class="form-check mt-4">
                                            <input class="form-check-input"
                                                type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label"
                                                for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                        <div class="d-grid mt-3">
                                            <button type="submit"
                                                class="btn btn-primary">Log
                                                In</button>
                                            {{-- <button type="button"
                                                class="btn btn-light border fw-semibold text-primary mt-3"><img
                                                    src="images/google.png"
                                                    alt="" class="me-3">Log With
                                                Google
                                            </button> --}}
                                        </div>
                                        <div class="mt-4 mb-0 text-center">
                                            <a href="reset.html"
                                                class="text-primary fw-semibold"><i
                                                    class="ri-lock-fill"></i>
                                                Forgot
                                                your password?</a>
                                        </div>
                                    </form>
                                    <!-- end form -->
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
                    class="ri-home-4-fill align-middle"></i>
            </a>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>