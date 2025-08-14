<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @include('chat.layouts.elements.head')
</head>

<body class="bg-light">
<style>
    body {
    background-image: url('http://localhost/therapist/public/chat-assets/assets/img/backgrounds/therapist-background.png');
    background-repeat: no-repeat;
    background-position: center; /* keeps image aligned at top */
    background-size: 100% auto;      /* full width, automatic height */
}


    .login-submit-btn {
        border-radius: 100px;
        background: #a3bfd9;
        background: linear-gradient(
            84deg,
            rgba(163, 191, 217, 0.5) 4%,
            rgba(163, 191, 217, 1) 100%
        );
    }

    .bg-visual {
        background-image: url('placeholder.jpg');
        background-size: cover;
        background-position: center;
    }

    .login-card {
        max-width: 500px;
        width: 100%;
    }

    .eye-icon {
        top: 70%;
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
                    <div class="mb-3">
                        <label for="name" class="form-label small">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label small">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Your email">
                    </div>
                    <div class="row mb-3 g-3">
                        <!-- Password -->
                        <div class="col position-relative">
                            <label for="password" class="form-label small">Password</label>
                            <input type="password" id="password" class="form-control pe-5" placeholder="Password">
                            <i class="position-absolute end-0 translate-middle-y me-3 ti ti-eye eye-icon"
                               style="cursor: pointer;" onclick="togglePassword('password', this)"></i>
                        </div>

                        <!-- Confirm Password -->
                        <div class="col position-relative">
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
