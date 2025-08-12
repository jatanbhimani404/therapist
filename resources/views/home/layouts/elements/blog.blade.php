<section class="py-5 blog-bg">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Insights, Stories, <span>& Inspiration</span></h2>
            <a href="#"
                class="btn border border-primary bg-transparent rounded-pill text-black text-decoration-none">View All
                Blogs
                →</a>
        </div>

        <div class="row g-4">
            <!-- Blog Card 1 -->
            <div class="col-12 col-md-6 col-lg-6">

                <div class="blog-card"
                    style="background-image: url('../../../../../../therapist/public/chat-assets/assets/img/backgrounds/blog-bg-1.png')">
                    <div class="blog-overlay"></div>
                    <div class="blog-date">July 20, 2025</div>
                    <div class="blog-content">
                        <h5 class="fw-bold text-white">Creating a Safer Home: 5 Practical Tips for Senior Well-being
                        </h5>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="blog-card"
                    style="background-image: url('../../../../../../therapist/public/chat-assets/assets/img/backgrounds/blog-bg-2.png')">
                    <div class="blog-overlay"></div>
                    <div class="blog-date">July 10, 2025</div>
                    <div class="blog-content">
                        <h5 class="fw-bold text-white">Healthy Habits for a Happier Lifestyle</h5>
                    </div>
                </div>
            </div>

            {{-- <!-- Blog Card 3 -->
        <div class="col-12 col-md-6 col-lg-6">
            <div class="blog-card">
                <div class="blog-overlay"></div>
                <div class="blog-date">June 25, 2025</div>
                <div class="blog-content">
                    <h5 class="fw-bold text-white">The Importance of Mental Well-being in Aging</h5>
                </div>
            </div>
        </div> --}}
        </div>
    </div>

</section>

<style>
    .blog-bg {
        background-image: url('../../../../../../therapist/public/chat-assets/assets/img/backgrounds/background.png');
        background-size: cover;
        min-height: 100vh;
        position: relative;
        margin-bottom: -5rem;
    }

    .blog-card {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        height: 300px;
        color: white;
        display: flex;
        align-items: flex-end;
        background-size: cover;
        background-position: center;
    }

    .blog-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.1));
    }

    .blog-content {
        position: relative;
        padding: 20px;
        z-index: 2;
    }

    .blog-date {
        position: absolute;
        top: 15px;
        right: 15px;
        background: white;
        color: black;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 500;
    }

    h2 span {
        color: #00796B;
        /* teal accent */
    }
</style>
