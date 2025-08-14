<style>
  /* Background image on all screen sizes */
  .section-about-background {
    background: url('{{ asset('chat-assets/assets/img/backgrounds/About-image.png') }}')
                no-repeat center center;
    background-size: cover; /* ensures image fully covers */
    background-position: center; /* keeps it centered */
  }

  /* Card styles */
  .wellness-card {
  background: linear-gradient(to bottom, #B7D6B8, #A3BFD9);
  border-radius: 25px;
  padding: 50px;
  margin-top: -60px;
  margin-bottom: -60px;
  /* First: inner shadow | Second: drop shadow */
  box-shadow:
    inset 0 0 24px #F7F4EF,            /* inner shadow */
    0 0 24px rgba(0, 0, 0, 0.08);      /* drop shadow with opacity 8% */
}


  /* Make card wider on md+ screens */
  @media (min-width: 768px) {
    .wellness-card {
      max-width: 570px; /* wider card */
      margin-right: 40px; /* shifts card slightly left */
    }
  }

    /* Make card wider on md+ screens */
  @media (max-width: 768px) {
    .wellness-card {
        border-radius:0px;
    }
  }
  /* Title */
  .wellness-title {
    font-weight: 900;
    font-size: 2.5rem;
    line-height: 1.3;
  }

  .wellness-title span {
    color: #008080;
  }

  /* Paragraph text */
  .wellness-text {
    margin-top: 15px;
    color: #555;
    font-size: 0.95rem;
    text-align: justify;
  }

  /* Feature items */
  .wellness-feature {
    font-weight: 500;
    color: #333;
    font-size: 0.95rem;
    text-align: justify;
  }

  .wellness-feature span {
    color: #008080;
  }

  /* Quote */
  .wellness-quote {
    margin-top: 20px;
    font-style: italic;
    font-weight: 700;
    color: #333;
    font-size: 21px;
  }

  /* Read More Button */
  .read-more-btn {
    border: 1px solid #000;
    border-radius: 50px;
    padding: 8px 20px;
    background: transparent;
    color: #000;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    text-decoration: none;
  }

  /* Mobile adjustments */
  @media (max-width: 767.98px) {
    .section-about-background {
      background: url('{{ asset('chat-assets/assets/img/backgrounds/About-image.png') }}')
                  no-repeat center center;
      background-size: cover;
      background-position: center;
      background-attachment: scroll; /* fixed can cause issues on mobile */
    }
    .wellness-card {
      margin-top: 20px;
      margin-bottom: 20px;
      max-width: 100%;
      margin-right: 0;
      padding: 30px; /* less padding for smaller screens */
    }
  }
</style>


<section class="position-relative section-about">
  <!-- Background for md+ -->
  <div class="d-none d-md-block position-absolute top-0 start-0 w-100 h-100 section-about-background"></div>

  <div class="container position-relative" style="z-index: 2;">
<div class="row">
    <div class="offset-md-6 col-12 col-md-auto wellness-card">

        <!-- Title -->
        <h2 class="wellness-title">
          <span>Empowering Mental Wellness</span>, One Connection At A Time
        </h2>

        <!-- Paragraphs -->
        <p class="wellness-text">
          We’re a trusted online platform that connects individuals with licensed therapists who specialize in a wide range of mental health needs. Whether you’re navigating anxiety, relationship issues, trauma, or simply seeking personal growth, we’re here to make finding the right therapist simple, secure, and stress-free.
        </p>
        <p class="wellness-text">
          Our mission is to break down barriers to care by offering flexible, confidential, and affordable therapy options—online or in-person.
        </p>

<!-- Features -->
<div class="row mt-4 wellness-feature">
  <div class="col-12 col-md-6 mb-3 d-flex align-items-center flex-column flex-md-row text-center text-md-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
         stroke="#006D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="mb-1 mb-md-0 me-md-2">
      <circle cx="10" cy="10" r="9" />
      <path d="M6 10l3 3 5-6" />
    </svg>
    Licensed & Trusted
  </div>
  
  <div class="col-12 col-md-6 mb-3 d-flex align-items-center flex-column flex-md-row text-center text-md-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
         stroke="#006D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="mb-1 mb-md-0 me-md-2">
      <circle cx="10" cy="10" r="9" />
      <path d="M6 10l3 3 5-6" />
    </svg>
    Personalized Support
  </div>

  <div class="col-12 col-md-6 mb-3 d-flex align-items-center flex-column flex-md-row text-center text-md-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
         stroke="#006D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="mb-1 mb-md-0 me-md-2">
      <circle cx="10" cy="10" r="9" />
      <path d="M6 10l3 3 5-6" />
    </svg>
    Experienced Therapist
  </div>

  <div class="col-12 col-md-6 mb-3 d-flex align-items-center flex-column flex-md-row text-center text-md-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
         stroke="#006D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="mb-1 mb-md-0 me-md-2">
      <circle cx="10" cy="10" r="9" />
      <path d="M6 10l3 3 5-6" />
    </svg>
    Midwest Values
  </div>
</div>

        <!-- Quote -->
        <blockquote class="wellness-quote">
          "Mental health is not a destination, but a process. It’s about how you drive, not where you’re going."
        </blockquote>

        <!-- Button -->
        <a href="#" class="read-more-btn mt-3">
          Read More About
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
               fill="none" stroke="currentColor" stroke-width="2"
               stroke-linecap="round" stroke-linejoin="round"
               class="ms-2">
            <path d="M9 5l7 7-7 7"/>
          </svg>
        </a>

      </div>
    </div>
  </div>
</section>
