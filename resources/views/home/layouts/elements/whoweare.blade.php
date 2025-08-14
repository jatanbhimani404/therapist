<style>
    .section-who-we-are {
        background-color: #F9F6F1;
        padding: 150px 0;
    }

    .custom-card {
        position: relative;
        background-color: teal;
        border-radius: 25px;
        max-width: 1200px;
        margin: 100px auto 50px;
        padding: 3rem; /* Inner space from all sides */
        overflow: visible;
        box-shadow:
            inset 0 0 24px #f7f4ef,
            0 0 24px rgba(0, 0, 0, 0.08);
        display: flex;
        flex-direction: column;
        gap: 3rem; /* Space between first and second row */
    }

    /* Pattern overlay */
    .custom-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: url('http://localhost/therapist/public/chat-assets/assets/img/backgrounds/pattern.png') center/120% no-repeat;
        opacity: 0.2;
        pointer-events: none;
        z-index: 0;
        border-radius: 25px;
    }

    /* Row container */
    .row-custom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        z-index: 1;
    }

.image-wrapper {
    flex-shrink: 0;
    position: relative;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 0 24px rgba(0, 0, 0, 0.08); /* drop shadow */
}

.image-wrapper img {
    width: 460px;
    height: 460px;
    object-fit: cover;
    display: block;
}

/* Inner shadow overlay */
.image-wrapper::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    pointer-events: none;
    box-shadow: inset 0 0 40px #f7f4ef;
}

    /* Overlap effect */
    .first-row .image-wrapper {
        margin-top: -130px;
    }

    .second-row .image-wrapper {
        margin-bottom: -130px;
    }

    /* Text styles */
    .text-block {
        max-width:550px;
    }

    .card-title {
        font-size: 38px;
        font-weight: bold;
        color: white;
        margin-bottom: 1rem;
    }

    .card-text {
        color: white;
        text-align: justify;
        margin-bottom: 1rem;
    }

/* Responsive adjustments */
@media (max-width: 768px) {
    .section-who-we-are {
        background-color: #F9F6F1;
        padding: 0px 0;
    }

    .custom-card {
        border-radius:0px;
    }

    .row-custom {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    /* Make images appear below the text */
    .first-row .image-wrapper {
        order: 2; /* Image comes after text */
        margin: 1rem 0 0 0;
    }
    .first-row .text-block {
        order: 1;
    }

    .second-row .text-block {
        order: 1;
    }
    .second-row .image-wrapper {
        order: 2; /* Image comes after text */
        margin: 1rem 0 0 0;
    }

    .image-wrapper img {
        width: 100%;
        height: auto;
    }

    .text-block {
        text-align: start;
        max-width: 100%;
    }

    .card-title {
        font-size:24px;
    }
}

</style>

<section class="section-who-we-are">
    <div class="custom-card">
        <!-- First Row -->
        <div class="row-custom first-row">
            <div class="image-wrapper">
                <img src="{{ asset('chat-assets/assets/img/backgrounds/image-1.jpg') }}" alt="Therapy Image 1">
            </div>
            <div class="text-block">
                <h2 class="card-title">The Right Support For Your Mental Wellness</h2>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat.
                    In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla
                    lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere.
                </p>
                <p class="card-text">
                    Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.
                </p>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row-custom second-row">
            <div class="text-block">
                <h2 class="card-title">A Space Where You Feel Seen And Heard</h2>
                <p class="card-text">
                    At HealBridge, we understand that starting therapy can feel intimidating – especially when you don't know where to begin.
                    That's why we've built more than just a platform. We've built a place of understanding.
                </p>
                <p class="card-text">
                    Every interaction, every feature, and every therapist profile is designed with your comfort, safety, and confidence in mind.
                    No confusing processes. No judgment. Just real people, here to support your healing. We believe therapy should feel human –
                    not transactional. Because mental wellness isn’t a luxury — it’s a necessity.
                </p>
            </div>
            <div class="image-wrapper">
                <img src="{{ asset('chat-assets/assets/img/backgrounds/image-2.jpg') }}" alt="Therapy Image 2">
            </div>
        </div>
    </div>
</section>
