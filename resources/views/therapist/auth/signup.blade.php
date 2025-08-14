<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    @include('chat.layouts.elements.head')
</head>

<body class="bg-light">
<style>
    body {
        background-image: url('http://localhost/therapist/public/chat-assets/assets/img/backgrounds/therapist-background.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100% auto;
    }

    .bg-visual {
        background-image: url('placeholder.jpg');
        background-size: cover;
        background-position: center;
    }

    /* Card container */
    .login-card {
        max-width: 480px;
        width: 100%;
        padding: 40px 30px;
        border-radius: 15px;
        background-color: #ffffff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Logo */
    .login-card img {
        height: 50px;
    }

    /* Heading */
    .login-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 8px;
    }

    .login-card p {
        font-size: 0.875rem;
        color: #6b7280;
        margin-bottom: 24px;
    }

    /* Unified container for label + input */
    .form-style {
        border: 1px solid #d1d5db;
        border-radius: 8px;
        padding: 8px 14px;
        background-color: #fafafa;
        position: relative;
    }

    /* Label inside the container */
    .form-style label {
        display: block;
        font-size: 0.75rem;
        font-weight: 600;
        color: #6b7280;
        margin-bottom: 2px;
        
    }

    /* Input inside the container */
    .form-style .form-control {
        border: none;
        padding: 0;
        font-size: 0.875rem;
        color: #111827;
        background: transparent;
        box-shadow: none;
    }

    .form-style .form-control:focus {
        outline: none;
        box-shadow: none;
    }

    /* Password eye icon inside same border */
    .form-style .eye-icon {
        position: absolute;
        top: 50%;
        right: 14px;
        transform: translateY(0%);
        cursor: pointer;
        color: #6b7280;
    }

    /* Checkbox */
    .login-card .form-check-label {
        font-size: 0.75rem;
        color: #6b7280;
    }

    .login-card .form-check-input:checked {
        background-color: #3b82f6;
        border-color: #3b82f6;
    }

    /* Sign up button */
    .login-submit-btn {
        border-radius: 100px;
        background: linear-gradient(
            84deg,
            rgba(163, 191, 217, 0.5) 4%,
            rgba(163, 191, 217, 1) 100%
        );
        color: #111827;
        font-weight: 600;
        padding: 10px 0;
        transition: all 0.3s ease;
    }

    .login-submit-btn:hover {
        background: linear-gradient(
            84deg,
            rgba(163, 191, 217, 0.8) 4%,
            rgba(163, 191, 217, 1) 100%
        );
    }

    /* Small footer text */
    .login-card .text-muted a {
        color: #3b82f6;
        text-decoration: none;
        font-weight: 500;
    }

    .login-card .text-muted a:hover {
        text-decoration: underline;
    }

    /* Divider */
    .login-card .d-flex hr {
        border-color: #e5e7eb;
    }

    /* Social buttons */
    .signin-btn {
        border-radius: 8px;
        font-size: 0.75rem;
        text-align: center;
        padding: 6px 0;
    }
</style>


<div class="container-fluid vh-100">
    <div class="row h-100">

        <!-- Login Form Area - shifted to left side -->
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center order-md-1 order-1">
            <div class="card shadow-lg p-5 rounded my-3">
                <div class="text-center mb-4">
                    <img src="{{ asset('chat-assets/assets/img/logo/Logo.png') }}" alt="Logo" class="img-fluid" style="height: 50px;">
                </div>
                <h3 class="text-center fw-bold mb-2">Find the Right Therapist for You</h3>
                <p class="text-center text-muted small mb-4">
                    Search & book sessions with licensed professionals, confidentially & securely.
                </p>

                <form>
                    <div class="mb-3 form-style">
                        <label for="name" class="form-label small">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your full name">
                    </div>
                    <div class="mb-3 form-style">
                        <label for="email" class="form-label small">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Your email">
                    </div>
                    <div class="mb-3 form-style">
                        <label for="lisenceNo" class="form-label small">Lisence Number/Certification Number</label>
                        <input type="text" id="lisenceNumber" name="lisenceNumber" class="form-control" placeholder="Your Lisence Number">
                    </div>
                    <div class="row mb-3 g-3">
                        <!-- Password -->
                        <div class="col position-relative form-style">
                            <label for="password" class="form-label small">Password</label>
                            <input type="password" id="password" class="form-control pe-5" placeholder="Password">
                            <i class="position-absolute end-0 translate-middle-y me-3 ti ti-eye eye-icon"
                               style="cursor: pointer;" onclick="togglePassword('password', this)"></i>
                        </div>

                        <!-- Confirm Password -->
                        <div class="col position-relative form-style">
                            <label for="confirmation" class="form-label small">Confirm Password</label>
                            <input type="password" id="confirmation" class="form-control pe-5" placeholder="Confirm Password">
                            <i class="position-absolute end-0 translate-middle-y me-3 ti ti-eye eye-icon"
                               style="cursor: pointer;" onclick="togglePassword('confirmation', this)"></i>
                        </div>
                    </div>

                    <script>
                        function togglePassword(id, icon) {
                            const input = document.getElementById(id);
                            if (input.type === "password") {
                                input.type = "text";
                                icon.classList.remove("ti-eye");
                                icon.classList.add("ti-eye-off");
                            } else {
                                input.type = "password";
                                icon.classList.remove("ti-eye-off");
                                icon.classList.add("ti-eye");
                            }
                        }
                    </script>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label small" for="remember">
                                By signing up, you agree to our
                                <a href="#" class="fw-bolder">Terms of Service</a> &
                                <a href="#" class="fw-bolder">Privacy Policy</a>.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold text-black mb-3 login-submit-btn">
                        SIGN UP →
                    </button>

                    <div class="d-flex align-items-center mb-3">
                        <hr class="flex-grow-1">
                        <span class="px-2 small text-muted">OR</span>
                        <hr class="flex-grow-1">
                    </div>

                    <div class="d-flex gap-2">
                        <button class="btn flex-fill btn-outline-secondary signin-btn">
                            <img src="{{ asset('chat-assets/assets/img/icons/brands/google-icon.png') }}" alt="" style="width: 15px;">
                            <small class="d-lg-block d-none">&nbsp;Google</small>
                        </button>
                        <button class="btn flex-fill btn-outline-secondary signin-btn">
                            <img src="{{ asset('chat-assets/assets/img/icons/brands/facebook-icon.png') }}" alt="" style="width: 15px;">
                            <small class="d-lg-block d-none">&nbsp;Facebook</small>
                        </button>
                        <button class="btn flex-fill btn-outline-secondary signin-btn">
                            <img src="{{ asset('chat-assets/assets/img/icons/brands/apple-icon.png') }}" alt="" style="width: 15px;">
                            <small class="d-lg-block d-none">&nbsp;Apple</small>
                        </button>
                    </div>
                </form>

                <div class="text-center mt-4 small text-muted">
                    <a href="#" class="me-2">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <div class="mt-1">© 2025 HealBridge</div>
                </div>
            </div>
        </div>

        <!-- Visual / Illustration Area - now on right side -->
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-visual order-md-2 order-2">
            <!-- Optional placeholder for your graphics -->
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
