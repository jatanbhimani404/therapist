<style>
    .footer {
        background: url('../../../../../../therapist/public/chat-assets/assets/img/backgrounds/footer-bg.png') no-repeat center center/cover;
        background-color: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        z-index: 1;
        position: relative;
        /* top: -5.1rem; */
        margin-top: -5.2rem;
        padding-top: 8rem !important;
    }

    .footer ul li {
        margin-bottom: 0.4rem;
    }

    .footer .brand-icon {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .brand-icon {
        background: #A3BFD9;
        background: linear-gradient(180deg, rgba(163, 191, 217, 0) 0%, rgba(163, 191, 217, 1) 100%);
    }

    .newsletter-submit-btn {
        background: #ffffff;
        background: radial-gradient(circle, rgba(255, 255, 255, 0) 0%, rgba(183, 214, 184, 3) 100%);
        right: 6.9rem;
    }
</style>

<!-- Footer Section -->
<footer class="footer bg-light text-dark pt-5">
    <div class="container mt-5">
        <div class="row gy-4">

            <!-- Featured Services -->
            <div class="col-md-3 col-6">
                <h6 class="fw-bold text-uppercase">Featured Services</h6>
                <hr>
                <ul class="list-unstyled mt-3">
                    <li>• Individual Therapy</li>
                    <li>• Couples & Relationship Counseling</li>
                    <li>• Family Therapy & Mediation</li>
                    <li>• Anxiety & Stress Management</li>
                    <li>• Depression & Mood Support</li>
                    <li>• Trauma & PTSD Therapy</li>
                    <li>• Grief & Loss Counseling</li>
                    <li>• Therapy for Teens & Young Adults</li>
                    <li>• LGBTQ+ Affirmative Therapy</li>
                    <li>• Career & Workplace Mental Wellness</li>
                </ul>
            </div>

            <!-- Site Navigation -->
            <div class="col-md-3 col-6">
                <h6 class="fw-bold text-uppercase">Site Navigation</h6>
                <hr>
                <ul class="list-unstyled mt-3">
                    <li><a href="#" class="text-decoration-none text-black">Home</a></li>
                    <li><a href="#" class="text-decoration-none text-black">About Us</a></li>
                    <li><a href="#" class="text-decoration-none text-black">For Clients</a></li>
                    <li><a href="#" class="text-decoration-none text-black">For Therapists</a></li>
                    <li><a href="#" class="text-decoration-none text-black">Latest Blogs</a></li>
                    <li><a href="#" class="text-decoration-none text-black">Contact Us</a></li>
                    <li><a href="#" class="text-decoration-none text-black">Cookies Policy</a></li>
                    <li><a href="#" class="text-decoration-none text-black">Privacy Policy</a></li>
                    <li><a href="#" class="text-decoration-none text-black">Terms of Service</a></li>
                    <li><a href="#" class="text-decoration-none text-black">Disclaimer</a></li>
                </ul>
            </div>


            <!-- Contact -->
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('chat-assets/assets/img/logo/Logo.png') }}" alt="HealBridge" class="mb-2"
                            style="height: 50px;">
                    </div>
                    <div class="col">
                        <div class="d-flex gap-2 mt-3">
                            <a href="#" class="btn btn-light brand-icon rounded-circle"><i
                                    class="ti ti-brand-instagram"></i></a>
                            <a href="#" class="btn btn-light brand-icon rounded-circle"><i
                                    class="ti ti-brand-facebook"></i></a>
                            <a href="#" class="btn btn-light brand-icon rounded-circle"><i
                                    class="ti ti-brand-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4 class="fw-bold mt-3">Contact</h4>
                        <hr>
                        <p class="mb-1 fw-bold fs-5">+98 (0)1234 567890</p>
                        <p>info@healbridge.com</p>
                    </div>
                    <div class="col">
                        <h4 class="fw-bold mt-3">Location</h4>
                        <hr>
                        <p>1234 Heartland Avenue<br>Springfield, IL 62701</p>
                    </div>
                </div>



                <!-- Location + Subscribe -->
                <div class="row">
                    <div class="col">
                        <h6 class="fw-bold mt-4">Subscribe Us</h6>
                        <div class="input-group mt-2">
                            <input type="email" name="email" class="form-control rounded-pill"
                                placeholder="Email Address">
                            <button class="btn btn-md text-black newsletter-submit-btn rounded-pill">Submit →</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="bg-dark text-center text-white py-3 mt-4">
        © Copyright 2025 Heal Bridge. All rights reserved.
    </div>
</footer>
