<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @include('chat.layouts.elements.head')
    <link rel="stylesheet" href="{{ asset('chat-assets/assets/vendor/css/pages/login.css') }}" />
</head>

<body class="bg-light">

    <div class="container-fluid vh-100">
        <div class="row h-100">
            <!-- Left Visual / Illustration Area -->
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-visual">
                <!-- Optional placeholder for your graphics -->
            </div>

            <!-- Login Form Area -->
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <div class="card shadow-lg p-5 rounded my-3">
                    <div class="text-center mb-4">
                        <img src="{{ asset('chat-assets/assets/img/logo/Logo.png') }}" alt="Logo" class="img-fluid"
                            style="height: 50px;">
                    </div>
                    <h3 class="text-center fw-bold mb-2">Welcome Back</h3>
                    <p class="text-center text-muted small mb-4">Log in to continue your journey of healing and self-discovery.</p>

                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label small">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="mb-3 position-relative">
                            <label for="password" class="form-label small">Password</label>
                            <input type="password" id="password" class="form-control pe-5" placeholder="Password">
                            <i class="position-absolute eye-icon end-0 translate-middle-y me-3 ti ti-eye"
                                style="cursor: pointer;"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label small" for="remember">Remember Me</label>
                            </div>
                            <a href="#" class="small text-decoration-none">Forgot password?</a>
                        </div>
                        <button type="submit"
                            class="btn btn-primary w-100 py-2 fw-semibold text-black mb-3 login-submit-btn">LOG IN
                            →</button>

                        <div class="d-flex align-items-center mb-3">
                            <hr class="flex-grow-1">
                            <span class="px-2 small text-muted">OR</span>
                            <hr class="flex-grow-1">
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn flex-fill btn-outline-secondary signin-btn">
                                <img src="{{ asset('chat-assets/assets/img/icons/brands/google-icon.png') }}"
                                    alt="" style="width: 15px;"><small
                                    class="d-lg-block d-none">&nbsp;Google</small>
                            </button>
                            <button class="btn flex-fill btn-outline-secondary signin-btn">
                                <img src="{{ asset('chat-assets/assets/img/icons/brands/facebook-icon.png') }}"
                                    alt="" style="width: 15px;"><small
                                    class="d-lg-block d-none">&nbsp;Facebook</small>
                            </button>
                            <button class="btn flex-fill btn-outline-secondary signin-btn">
                                <img src="{{ asset('chat-assets/assets/img/icons/brands/apple-icon.png') }}"
                                    alt="" style="width: 15px;"><small
                                    class="d-lg-block d-none">&nbsp;Apple</small>
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
