{{-- code from here  --}}
<link rel="stylesheet" href="https://github.githubassets.com/fonts/Mona-Sans.woff2">
<style>
    @font-face {
    font-family: 'Mona Sans';
    src: url('https://github.githubassets.com/fonts/Mona-Sans.woff2') format('woff2');
    font-weight: 100 900;
    font-display: swap;
    }
    .section-background {
        background: url('{{ asset('chat-assets/assets/img/backgrounds/background.png') }}') no-repeat center center/cover;
        font-family: 'Mona Sans', sans-serif;
    }
    .section-title {
        font-weight: 700;
        font-size: 2rem;
    }
    .section-title span {
        color: #2B7A78;
    }
    /* Narrower section */
    .container.custom-width {
        max-width: 1240px; /* adjust for how narrow you want */
    }
    .card-custom {
        border-radius: 15px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 5px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        height: 100%;
        cursor: pointer;
        min-height: 300px; /* smaller height */
        display: flex;
        flex-direction: column;
        border: 1px solid #2B7A78;
    }
    .card-custom.selected {
        background-color: #354142;
        color: #fff;
        box-shadow: inset 0 0 25px rgba(255,255,255,0.3);
    }
    .card-custom.selected h5,
    .card-custom.selected p,
    .card-custom.selected a {
        color: #fff !important;
    }
    .icon-box {
        width: 50px;
        height: 50px;
        border-radius: 10px;
        background-color: #f4f4f4;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        transition: background-color 0.3s ease;
    }
    .card-custom.selected .icon-box {
        background-color: #fff;
    }
    .card-custom h5 {
        font-weight: 700;
        color: #2B7A78;
        font-size: 21px;
    }
    .card-custom p {
        color: #9ca3af;
        font-size: 0.8rem;
    }
    .learn-more {
        display: inline-flex;
        align-items: center;
        font-weight: 600;
        color: #000;
        text-decoration: none;
        margin-top: auto; /* pushes link to bottom */
        transition: transform 0.2s ease, color 0.2s ease;
        font-size:13px;
    }
    .learn-more:hover {
        transform: translateY(-3px);
        color: #2B7A78;
    }
    @media (min-width: 768px) {
    .section-background {
        min-height: 1000px;
        display: flex; /* Optional: keeps cards vertically centered if content is short */
        align-items: center; /* Optional */
    }
}
</style>

<section class="section-background">
<div class="container custom-width py-5">
  <div class="text-center mb-4">
    <h2 class="section-title">Trusted Therapy For <span>Wellness Services</span></h2>
    <p class="text-muted" style="max-width: 700px; margin: auto; font-size: 12px;">
      We connect you with licensed, experienced therapists who specialize in a wide range of mental health concerns.
      Whether you're facing daily stress or deep emotional challenges, we're here to help you find the right support, at the right time.
    </p>
  </div>

  <div class="row g-4">
    <!-- Card -->
    <div class="col-12 col-md-3">
      <div class="card-custom selected">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>Trauma & PTSD Support</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

    <div class="col-12 col-md-3">
      <div class="card-custom">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>Grief & Loss Counseling</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

    <div class="col-12 col-md-3">
      <div class="card-custom">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>LGBTQ+ Affirmative Therapy</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

    <div class="col-12 col-md-3">
      <div class="card-custom">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>Therapy For Teens & Young Adults</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="col-12 col-md-3">
      <div class="card-custom">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>Career & Workplace Stress Therapy</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

    <div class="col-12 col-md-3">
      <div class="card-custom">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>Mindfulness & Stress Management</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

    <div class="col-12 col-md-3">
      <div class="card-custom">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>Perinatal &<br/> Postpartum Therapy</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

    <div class="col-12 col-md-3">
      <div class="card-custom">
        <div class="icon-box">
          <img src="{{ asset('chat-assets/assets/img/icons/trusted-section/RespiteCare.png') }}" alt="icon" width="24">
        </div>
        <h5>Spiritual & Holistic Therapy</h5>
        <p>Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor.</p>
        <a href="#" class="learn-more">LEARN MORE &rarr;</a>
      </div>
    </div>

  </div>
</div>

<script>
  document.querySelectorAll('.card-custom').forEach(card => {
    card.addEventListener('click', () => {
      document.querySelectorAll('.card-custom').forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
    });
  });
</script>

</section>