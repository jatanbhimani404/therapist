<style>
    .hero-section {
        background-color: #fff;
        position: relative;
        margin-top: -25px;
    }

    .text-highlight {
        color: #2a7a78;
    }

    .hero-bg {
        background-image: url('../../../../../../therapist/public/chat-assets/assets/img/backgrounds/hero-bg.png');
        background-size: cover;
        background-position: center;
        min-height: 500px;
        /* Mobile height */
    }

    .hero-content {
        max-width: 500px;
    }

    .btn-gradient {
        background: linear-gradient(to right, #a4d6b3, #a7cbe2);
        border: none;
        color: #2a2a2a;
        font-weight: 600;
        border-radius: 50px;
        padding: 12px 28px;
        transition: all 0.3s ease;
    }

    .btn-gradient:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }

    @media (max-width: 991px) {
        .hero-section {
            background-color: #f8f8f2 !important;
            margin-top: 0;

        }

    }
</style>


<section class="hero-section hero-bg">
    <div class="container-fluid">
        <div class="row g-0 min-vh-100">
            <!-- Left Content -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start p-5">
                <div class="hero-content text-center text-lg-start">
                    <h1 class="fw-bold">
                        Find The Right <br>
                        <span class="text-highlight">Therapist For You</span>
                    </h1>
                    <p class="mt-3 text-muted">
                        Whether you’re navigating anxiety, stress, relationship challenges, or simply need someone to
                        talk to – we make connecting with a licensed therapist easy, private, and personalized.
                    </p>
                    <a href="#" class="btn btn-gradient btn-lg mt-4">
                        Schedule Consultation <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
