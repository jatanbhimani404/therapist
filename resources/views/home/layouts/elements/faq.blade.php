<style>
    .faq-highlight {
        color: #2bb7a7;
        /* Teal color for "FAQs" */
    }

    .accordion-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #faf8f4;
        border: 1px solid #e6e6e6;
        padding: 0;
        border-radius: 12px !important;


    }

    .accordion-button strong {
        padding-left: 2rem;
    }

    .accordion-button::after {
        display: none;
    }

    .faq-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        font-size: 1.5rem;
        font-weight: bold;
        color: #fff;
        background-color: #2b7a78;
        /* background: radial-gradient(circle, rgba(43, 183, 167, 0) 0%, rgba(43, 183, 167, 1) 100%); */
        border-radius: 12px;
        transition: all 0.3s ease;
        box-shadow: inset 0 0 30px rgba(255, 255, 255, 0.4);

    }

    .accordion-button:not(.collapsed) .faq-btn::before {
        content: 'x';
        font-size: 1rem;
    }

    .accordion-button.collapsed .faq-btn::before {
        content: '+';
        font-size: 1rem;
    }

    .accordion-body {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem;
    }

    .faq-section {
        background-color: #faf8f4
    }
</style>

<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-2">
            Client & Therapist <span class="faq-highlight">FAQs</span>
        </h2>
        <p class="text-center text-muted mb-5">
            Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas.
            Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti
            sociosqu.
        </p>

        <div class="accordion" id="faqAccordion">
            <!-- Item -->
            <div class="accordion-item border-0 mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq1">
                        <strong>Q1 How do I find the right therapist?</strong>
                        <span class="faq-btn"></span>
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="mt-2 mb-0">
                            Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus
                            bibendum egestas.
                            Iaculis massa nisl malesuada lacinia integer nunc posuere.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item border-0 mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq2">
                        <strong>Q2 Can I choose my session format?</strong>
                        <span class="faq-btn"></span>
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="mt-2 mb-0">
                            Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus
                            bibendum egestas.
                            Iaculis massa nisl malesuada lacinia integer nunc posuere.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item border-0 mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq3">
                        <strong>Q3 How much does therapy cost?</strong>
                        <span class="faq-btn"></span>
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="mt-2 mb-0">
                            Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus
                            bibendum egestas.
                            Iaculis massa nisl malesuada lacinia integer nunc posuere.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item border-0 mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq4">
                        <strong>Q4 Is my information private and secure?</strong>
                        <span class="faq-btn"></span>
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="mt-2 mb-0">
                            Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus
                            bibendum egestas.
                            Iaculis massa nisl malesuada lacinia integer nunc posuere.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Repeat Items -->
            {{-- <div class="accordion-item border-0 mb-3">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq2">
                        <span class="faq-btn">+</span>
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <strong>Q1 Example Question?</strong>
                        <p class="mt-2 mb-0">
                            Example answer text here...
                        </p>
                    </div>
                </div>
            </div> --}}

            <!-- Add more items here -->
        </div>
    </div>
</section>
