<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.ico') }}">
    <title>Sign up with Tripe | Your One Stop Support</title>

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
                                        <h3 class="mb-1">User Registration</h3>
                                        <!-- <p>And lets get started with your free trial</p> -->
                                    </div>
                                    <div>
                                        <div id="js-alert" class="alert" style="display: none; width: 410px;">
                                            <div class="alert-content">
                                                <span id="js-alert-icon" class="alert-icon">
                                                    <!-- SVG will be injected here by JS -->
                                                </span>
                                                <div id="js-alert-message"></div>
                                            </div>
                                        </div>
                                        <form action="{{ route('api_register') }}" method="POST" id="register-form">
                                            @csrf
                                            <div class="form-container vertical">
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">First Name</label>
                                                    <div>
                                                        <input class="input" type="text" name="firstName"
                                                            placeholder="First Name" id="firstName">
                                                    </div>
                                                </div>
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Last Name</label>
                                                    <div>
                                                        <input class="input" type="text" name="lastName"
                                                            placeholder="Last Name" id="lastName">
                                                    </div>
                                                </div>
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Email</label>
                                                    <div>
                                                        <input class="input" type="text" name="email"
                                                            id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Password</label>
                                                    <div>
                                                        <span class="input-wrapper">
                                                            <input class="input pr-8" type="password" name="password"
                                                                id="password-input" placeholder="Minimum 8 characters">
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
                                                <div class="form-item vertical">
                                                    <label class="form-label mb-2">Confirm Password</label>
                                                    <div>
                                                        <span class="input-wrapper">
                                                            <input class="input pr-8" type="password"
                                                                name="confirmPassword" placeholder="Confirm Password"
                                                                id="confirm-password-input">
                                                            <div class="input-suffix-end">
                                                                <span class="cursor-pointer text-xl">
                                                                    <svg stroke="currentColor" fill="none"
                                                                        stroke-width="2" viewBox="0 0 24 24"
                                                                        aria-hidden="true" height="1em"
                                                                        width="1em"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <button class="btn btn-solid w-full" type="submit" id="submit-btn">
                                                    <span id="btn-text">Register</span>
                                                    <span id="btn-loader" style="display: none;">Processing...</span>
                                                </button>
                                                <div class="mt-4 text-center">
                                                    <span>Already have an account?</span>
                                                    <a class="text-primary-600 hover:underline"
                                                        href="{{ route('user_login') }}">Login</a>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="error-message" id="error-message" style="color: red"></div>

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
        // Password visibility toggle
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password-input');
            const confirmpasswordInput = document.getElementById('confirm-password-input');
            const togglePassword = document.getElementById('toggle-password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeOff = document.getElementById('eye-off');

            togglePassword.addEventListener('click', function() {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                const isConfirmPassword = confirmpasswordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                confirmpasswordInput.setAttribute('type', isPassword ? 'text' : 'password');
                eyeOpen.style.display = isPassword ? 'inline' : 'none';
                eyeOff.style.display = isPassword ? 'none' : 'inline';
            });

            // Set initial state
            eyeOpen.style.display = 'none';
            eyeOff.style.display = 'inline';
        });


        // Fixed SVG icons (proper syntax)
        const svg = {
            success: '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>',
            danger: '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>'
        };

        // Dynamic alerts
        const jsAlert = document.getElementById('js-alert');
        const jsAlertIcon = document.getElementById('js-alert-icon');
        const jsAlertMessage = document.getElementById('js-alert-message');

        // Function to show the alert
        function showAlert(type, message) {
            if (!jsAlert) return;
            jsAlert.className = `alert alert-${type}`;
            jsAlertIcon.innerHTML = svg[type];
            jsAlertMessage.textContent = message;
            jsAlert.style.display = 'block';

            // Auto-hide success messages after 3 seconds
            if (type === 'success') {
                setTimeout(() => {
                    hideAlert();
                }, 3000);
            }
        }

        // Function to hide the alert
        function hideAlert() {
            if (jsAlert) jsAlert.style.display = 'none';
        }


        // Handling form submission
        const registerForm = document.getElementById('register-form');
        const submitBtn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const btnLoader = document.getElementById('btn-loader');

        registerForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            hideAlert();

            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline';

            const firstName = registerForm.firstName.value.trim();
            const lastName = registerForm.lastName.value.trim();
            const password = registerForm.password.value.trim();
            const confirmPassword = registerForm.confirmPassword.value.trim();
            const email = registerForm.email.value.trim();
            const csrfToken = document.querySelector('input[name="_token"]').value

            try {
                const response = await fetch('{{ route('api_register') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        firstName,
                        lastName,
                        email,
                        password,
                        confirmPassword
                    }),
                    credentials: 'same-origin'
                });

                const result = await response.json();

                if (response.ok) {
                    console.log(result)
                    showAlert('success', result.message ||
                        'Registration successful! Please check your email to verify your account.');

                    //Redirect to login after a short delay
                    setTimeout(() => {
                        window.location.href = '{{ route('user_login') }}';
                    }, 2000);
                } else {
                    // Handle validation errors
                    if (result.errors) {
                        const errorMessages = Object.values(result.errors).flat().join('\n');
                        showAlert('danger', errorMessages);
                    } else {
                        showAlert('danger', result.message || 'Registration failed. Please try again');
                    }
                    //Re-enable the button on failure
                    submitBtn.disabled = false;
                    btnText.style.display = 'inline';
                    btnLoader.style.display = 'none';

                }
            } catch (error) {
                console.error('Submission error:', error);
                showAlert('danger', 'A network error occured. Please try again.');

                //Re-enable the button on failure
                submitBtn.disabled = false;
                btnText.style.display = 'inline';
                btnLoader.style.display = 'none';
            }

        });
    </script>
</body>

</html>
