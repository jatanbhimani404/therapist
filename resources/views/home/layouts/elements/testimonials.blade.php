<style>


    .testimonials-bg{
        background-image: url('../../../../../../therapist/public/chat-assets/assets/img/backgrounds/background.png');
        background-size: cover;
        min-height: 100vh;
        position: relative;
        margin-bottom: -7rem;
        z-index: 1;
    }

    .section-title {
        font-weight: 700;
        text-align: center;
        margin-bottom: 40px;
    }

    .section-title span {
        color: #007b7f;
        /* teal-ish for highlight */
    }

    .testimonial-card {
        background: #fff;
        border-radius: 20px;
        border: 1px solid #e6e6e6;
        padding: 1rem 2rem;
        min-height: 150px;

    }

    .testimonial-text {
        font-style: italic;
        color: #555;
    }

    .testimonial-author {
        font-weight: bold;
        font-size: 0.6rem;
    }

    .quote-icon {
        font-size: 2rem;
        color: #007b7f;
    }

    .quote-icon img {
        width: 20% !important;
    }

    .star-rating {
        color: #007b7f;
    }

    @media (max-width: 991px) {
        .testimonials-bg {
            min-height: 90vh;

        }

    }
</style>


<div class="py-5 testimonials-bg">
    <div class="container-md">
        <h2 class="section-title">What Our Client <span>Are Saying</span></h2>
        <p class="text-center small x-50 mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor incidunt non,
            voluptatem nihil exercitationem placeat ullam dolore quibusdam nam porro reiciendis voluptates, voluptatum
            voluptate iusto doloribus. </p>
    </div>
    <div class="owl-carousel owl-theme">

        <div class="item mx-3">
            <div class="testimonial-card">
                <p class="testimonial-text">"HealBridge is the first platform I truly connect with. It’s been a
                    life-changer."</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="quote-icon">
                        <img src="{{asset('chat-assets/assets/img/icons/quote/Vector.png')}}"  alt="">
                    </div>
                    <p class="small mb-0 text-end"><span class="star-rating">★★★★★</span><br>
                        <span class="testimonial-author">EMILY W., CLIENT’S FAMILY MEMBER</span></p>
                </div>
            </div>
        </div>

        <div class="item mx-3">
            <div class="testimonial-card">
                <p class="testimonial-text">"The flexibility of online sessions helped me stay consistent. My therapist
                    really listens."</p>
                 <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="quote-icon">
                        <img src="{{asset('chat-assets/assets/img/icons/quote/Vector.png')}}"  alt="">
                    </div>
                    <p class="small mb-0 text-end"><span class="star-rating">★★★★★</span><br>
                        <span class="testimonial-author">EMILY W., CLIENT’S FAMILY MEMBER</span></p>
                </div>
            </div>
        </div>

        <div class="item mx-3">
            <div class="testimonial-card">
                <p class="testimonial-text">"We found a wonderful couples therapist through HealBridge who helped us
                    rebuild our relationship."</p>
                 <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="quote-icon">
                        <img src="{{asset('chat-assets/assets/img/icons/quote/Vector.png')}}"  alt="">
                    </div>
                    <p class="small mb-0 text-end"><span class="star-rating">★★★★★</span><br>
                        <span class="testimonial-author">EMILY W., CLIENT’S FAMILY MEMBER</span></p>
                </div>
            </div>
        </div>

        <div class="item mx-3">
            <div class="testimonial-card">
                <p class="testimonial-text">"As a therapist, it means so much for me. The platform is simple yet
                    professional."</p>
                 <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="quote-icon">
                        <img src="{{asset('chat-assets/assets/img/icons/quote/Vector.png')}}"  alt="">
                    </div>
                    <p class="small mb-0 text-end"><span class="star-rating">★★★★★</span><br>
                        <span class="testimonial-author">EMILY W., CLIENT’S FAMILY MEMBER</span></p>
                </div>
            </div>
        </div>

    </div>
</div>
