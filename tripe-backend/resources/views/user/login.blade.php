<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.ico') }}">
    <title>Log in - Tripe, Your One Stop Support Bot</title>

    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>
    <!-- App Start-->
    <div id="root">
        <!-- App Layout-->
        <div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
            <div class="h-full flex flex-auto flex-col justify-between">
                <main class="h-full">
                    <div class="page-container relative h-full flex flex-auto flex-col">
                        <div class="grid lg:grid-cols-3 h-full">
                            <div class="bg-no-repeat bg-cover py-6 px-16 flex-col justify-between hidden lg:flex"
                                style="background-image: url('frontend/assets/img/others/auth-side-bg.jpg');">
                                <div class="logo">
                                    <h2 style="color: #fff;">TRIPE</h2>
                                </div>
                                <div>
                                    <img class="avatar-img avatar-circle"
                                        src="{{ asset('frontend/assets/img/others/Login-rafiki.png') }}" loading="lazy">
                                </div>
                                <span class="text-white">Copyright © 2025
                                    <span class="font-semibold">VENIHOST</span>
                                </span>
                            </div>
                            <div class="col-span-2 flex flex-col justify-center items-center bg-white dark:bg-gray-800">
                                <div class="xl:min-w-[450px] px-8">
                                    <div class="mb-8">
                                        <h3 class="mb-1">Welcome back!</h3>
                                        <p>Please enter your credentials to Login!</p>
                                    </div>
                                    <div>
                                        <form action="{{ route('login_submit') }}" method="POST">
                                            @csrf
                                            <div class="form-container vertical">
                                                @if (session('success'))
                                                    <div class="alert alert-success" style="width: 410px">
                                                        <div class="alert-content">
                                                            <span class="alert-icon">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                    stroke-width="0" viewBox="0 0 20 20"
                                                                    aria-hidden="true" height="1em" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </span>
                                                            <div> {{ session('success') }} </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (session('error'))
                                                    <div class="alert alert-success" style="width: 410px">
                                                        <div class="alert-content">
                                                            <span class="alert-icon">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                    stroke-width="0" viewBox="0 0 20 20"
                                                                    aria-hidden="true" height="1em" width="1em"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </span>
                                                            <div> {{ session('error') }} </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                        <div class="alert alert-info" style="width: 410px">
                                                            <div class="alert-content">
                                                                <span class="alert-icon">
                                                                    <svg stroke="currentColor" fill="currentColor"
                                                                        stroke-width="0" viewBox="0 0 20 20"
                                                                        aria-hidden="true" height="1em" width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
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
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Email</label>
                                                    <div>
                                                        <input class="input" type="text" name="email"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Password</label>
                                                    <div>
                                                        <span class="input-wrapper">
                                                            <input class="input pr-8" type="password" name="password"
                                                                placeholder="Password" id="password-input">
                                                            <div class="input-suffix-end">
                                                                <span class="cursor-pointer text-xl"
                                                                    id="toggle-password">
                                                                    <svg id="eye-open" style="display: none;"
                                                                        stroke="currentColor" fill="none"
                                                                        stroke-width="2" viewBox="0 0 24 24"
                                                                        height="1em" width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.543 7-1.275 4.057-5.065 7-9.543 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                    </svg>
                                                                    <!-- Eye Off Icon (hidden) -->
                                                                    <svg id="eye-off" stroke="currentColor"
                                                                        fill="none" stroke-width="2"
                                                                        viewBox="0 0 24 24" height="1em"
                                                                        width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mb-6">

                                                    <a class="text-primary-600 hover:underline"
                                                        href="{{ route('forgot_password')}}">Forgot Password?</a>
                                                </div>
                                                <button class="btn btn-solid w-full" type="submit">Login</button>
                                                <div class="mt-4 text-center">
                                                    <span>Don't have an account yet?</span>
                                                    <a class="text-primary-600 hover:underline"
                                                        href="{{ route('user_register') }}">Register</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password-input');
            const togglePassword = document.getElementById('toggle-password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeOff = document.getElementById('eye-off');

            togglePassword.addEventListener('click', function() {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                eyeOpen.style.display = isPassword ? 'inline' : 'none';
                eyeOff.style.display = isPassword ? 'none' : 'inline';
            });

            // Set initial state
            eyeOpen.style.display = 'none';
            eyeOff.style.display = 'inline';
        });
    </script>
</body>

</html>
