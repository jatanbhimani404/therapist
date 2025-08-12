<style>
    /* Gradient background for navbar */
    .navbar {
        background: linear-gradient(to right, #b5d3b0, #a4cfc8, #9fc1d1);
        border-radius: 50px;
        padding: 0.8rem 0;
    }

    /* Nav links styling */
    .nav-links .nav-link {
        font-weight: 600;
        color: #333;
        padding: 0.5rem 1rem;
    }

    .nav-links .nav-link:hover {
        color: #000;
    }

    .sign-up-btn {
        height: 60px;
        width: 10rem;
        background: #354142;
        background: radial-gradient(circle, rgba(53, 65, 66, 0.5) 0%, rgba(53, 65, 66, 1) 100%);
    }

    /* Top bar text */
    .text-uppercase {
        font-size: 0.75rem;
        letter-spacing: 0.5px;
    }

    /* Make navbar toggler visible on gradient */
    .navbar-light .navbar-toggler {
        border-color: rgba(0, 0, 0, 0.1);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.7%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Mobile adjustments */
    @media (max-width: 991px) {
        .navbar {
            border-radius: 20px;
        }

        .d-flex.align-items-center.ms-lg-3 {
            flex-direction: column;
            align-items: flex-start;
        }

        .d-flex.align-items-center.ms-lg-3 span {
            margin-bottom: 0.5rem;
        }
    }
</style>
<div class="py-3">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <div class="d-flex align-items-center mb-2 mb-lg-0">
            <img src="{{ asset('chat-assets/assets/img/logo/Logo.png') }}" alt="HealBridge Logo" height="40"
                class="me-2">
            {{-- <span class="fw-bold fs-5 text-dark">HealBridge</span> --}}
        </div>
        <button class="navbar-toggler d-lg-none d-block" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-none d-lg-flex flex-wrap align-items-center gap-4 text-center text-lg-start">
            <div>
                <small class="text-uppercase fw-bold d-block">Email Us</small>
                <span class="text-muted">info@healbridge.com</span>
            </div>
            <div>
                <small class="text-uppercase fw-bold d-block">Call Us</small>
                <span class="text-muted">+98 (0)1234 567890</span>
            </div>
            <div>
                <small class="text-uppercase fw-bold d-block">Follow Us</small>
                <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar container ps-4 py-0 pe-0 navbar-expand-lg navbar-light">



    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-links">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#">For Clients</a></li>
            <li class="nav-item"><a class="nav-link" href="#">For Therapists</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Latest Blogs</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            <li class="nav-item d-lg-none"><a class="nav-link" href="#">Join As A Therapists</a></li>
            <li class="nav-item d-lg-none"><a class="nav-link" href="#">Sign Up</a></li>
        </ul>


    </div>



    <!-- Sign Up Section (desktop) -->
    <div class="d-none d-lg-flex align-items-center ms-lg-3">
        <a href="#"><span class="me-3 fw-semibold">Join As A Therapists</span></a>
        <a href="#" class="btn btn-dark btn-lg fs-6 rounded-pill sign-up-btn py-3 px-4">
            Sign Up <i class="fa-solid fa-arrow-right ms-2"></i>
        </a>
    </div>
</nav>
