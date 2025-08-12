<style>
    .cta-section {
        position: relative;
        z-index: 3;
    }

    /* CTA Section Styling */
    .cta-box {
        position: relative;
        overflow: hidden;
        border-radius: 50px;
        padding: 2rem;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
        color: #2a2a2a;
    }

    /* Blurred gradient background */
    .cta-box::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, #a4c4d6, #b1d3b4);
        filter: blur(30px);
        /* You control how strong the blur is here */
        z-index: 1;
    }

    /* Keep content above the blur */
    .cta-box>* {
        position: relative;
        z-index: 1;
    }




    .cta-title {
        font-size: 1.5rem;
    }

    .cta-box .btn {
        font-weight: 600;
    }

    .cta-btn {
        background: #354142;
        background: radial-gradient(circle, rgba(53, 65, 66, 0.5) 0%, rgba(53, 65, 66, 1) 100%);
        border: 1.8px solid white;
    }

    .take-first-text {
        color: #2b7a78;
    }

    @media (max-width: 576px) {
        .cta-title {
            font-size: 1.25rem;
        }
    }
</style>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-box text-center p-4">
            <h1 class="cta-title mb-4 fs-2 fw-bold">
                <span class="take-first-text">Take the First Step</span> Toward Feeling Better.
            </h1>
            <a href="#" class="btn btn-dark cta-btn btn-lg rounded-pill px-4">
                Request a Free Consultation <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
