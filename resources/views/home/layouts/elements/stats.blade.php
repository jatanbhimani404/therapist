<!-- Stats Section -->
<section class="py-3 bg-light align-self-center shadow rounded-3 text-center">
    <div class="container-sm">
        <div class="row">
            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">
                    <span class="counter" data-target="100">0</span>K+
                </h3>
                <small class="text-secondary text-uppercase">Sessions Booked</small>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">
                    <span class="counter" data-target="95">0</span>%
                </h3>
                <small class="text-secondary text-uppercase">Recommend Us</small>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h3 class="fw-bold text-dark">
                    <span class="counter" data-target="10">0</span>K+
                </h3>
                <small class="text-secondary text-uppercase">Stratified Clients</small>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="fw-bold text-dark">
                    <span class="counter" data-target="2000">0</span>+
                </h3>
                <small class="text-secondary text-uppercase">Certified Therapist</small>
            </div>
        </div>
    </div>
</section>

<style>
    section.bg-light {
        background-color: #faf8f4 !important;
        position: relative;
        margin: -5rem 10rem 0 10rem;
        z-index: 2;
    }

    .counter {
        display: inline-block;
    }

    @media (max-width: 991px) {
        section.bg-light {
            margin: -8rem 5rem 0 5rem;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");

        counters.forEach(counter => {
            counter.innerText = "0";
            const updateCounter = () => {
                const target = +counter.getAttribute("data-target");
                const current = +counter.innerText;
                const increment = target / 200; // speed

                if (current < target) {
                    counter.innerText = Math.ceil(current + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    });
</script>
