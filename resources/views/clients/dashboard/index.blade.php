@extends('clients.layouts.app')

@section('content')
    <style>
        .page-title {
            padding: 20px 0;
        }

        .page-title h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .page-title p {
            margin: 0;
            color: #6c757d;
        }

        .stats-card {
            border-radius: 12px;
            padding: 20px;
            color: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: inset 0 2px 6px rgba(0, 0, 0, 0.1);
            min-height: 100px;
        }

        .stats-title {
            font-size: 14px;
            margin-bottom: 5px;
            opacity: 0.8;
        }

        .stats-value {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 3px;
        }

        .stats-sub {
            font-size: 12px;
            opacity: 0.7;
        }

        .therapist-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .therapist-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .therapist-name {
            font-weight: bold;
            font-size: 1rem;
            margin-bottom: 3px;
        }

        .therapist-speciality {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 5px;
        }

        .match-badge {
            background-color: #d4f3d4;
            color: #2d7a2d;
            font-weight: bold;
            font-size: 0.6rem;
            padding: 4px 8px;
            border-radius: 8px;
            display: inline-block;
        }

        .ti-star-filled {
            color: #f5a623;
            font-size: 0.7rem !important;
        }

        .people-rated {
            font-size: 1rem;
            color: #666;
            margin-left: 5px;
        }

        .therapist-card {
            background-color: rgba(163, 191, 217, 0.3);
        }

        .therapist-card .btn {
            background: #B7D6B8;
            background: linear-gradient(180deg, rgba(183, 214, 184, 0.5) 0%, rgba(183, 214, 184, 1) 100%);
            color: black;
            height: 2.5rem !important;
            width: 5rem !important
        }

        .session-card {
            background-color: #eaf5ec;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .session-date {
            text-align: right;
        }

        .badge-tomorrow {
            background-color: white;
            border: 1px solid #ccc;
            font-size: 0.7rem;
            padding: 4px 8px;
            border-radius: 6px;
            font-weight: 600;
            text-align: center;
        }

        .join-btn {
            background-color: #212529;
            color: white;
            border-radius: 25px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .join-btn:hover {
            background-color: #000;
            color: white;
        }

        /* Responsive tweaks */
        @media (max-width: 576px) {
            .session-date {
                text-align: left;
                margin-top: 5px;
            }

            .join-btn {
                justify-content: center;
            }
        }
    </style>


    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="page-title">
                <h3 class="text-black mb-0">Good Morning, Zota</h3>
                <p>Monitor all activity in real-time, manage sessions, and ensure the safety and integrity of conversations.
                </p>
            </div>

            {{-- stats --}}

            <div class="row g-3">

                <!-- Progress Card -->
                <div class="col-md-4">
                    <div class="stats-card"
                        style="background: #B7D6B8; background: linear-gradient(90deg, rgba(183, 214, 184, 0) 0%, rgba(183, 214, 184, 1) 100%);">
                        <div>
                            <div class="stats-title">Your Progress</div>
                            <div class="stats-value">82%</div>
                            <div class="stats-sub">Wellness goals achieved</div>
                        </div>
                        <img src="{{ asset('chat-assets/assets/img/icons/heart.svg') }}" alt="">
                    </div>
                </div>

                <!-- Session Rating Card -->
                <div class="col-md-4">
                    <div class="stats-card"
                        style="background: #C4C6C8; background: linear-gradient(74deg, rgba(196, 198, 200, 0) 0%, rgba(196, 198, 200, 1) 100%);">
                        <div>
                            <div class="stats-title">Session Rating</div>
                            <div class="stats-value">4.9</div>
                            <div class="stats-sub">Average satisfaction</div>
                        </div>
                        <img src="{{ asset('chat-assets/assets/img/icons/star.svg') }}" alt="">
                    </div>
                </div>

                <!-- Last Payment Card -->
                <div class="col-md-4">
                    <div class="stats-card"
                        style="background: #A3BFD9; background: linear-gradient(90deg, rgba(163, 191, 217, 0) 0%, rgba(163, 191, 217, 1) 100%);">
                        <div>
                            <div class="stats-title">Last Payment</div>
                            <div class="stats-value">$120</div>
                            <div class="stats-sub">Single session with Dr. Sarah Johnson</div>
                        </div>
                        <img src="{{ asset('chat-assets/assets/img/icons/coin-hand.svg') }}" alt="">
                    </div>
                </div>
            </div>

            {{-- rocommended thrapists --}}
            <div class="row mt-4 rounded">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold mb-0 text-black">Recommended Therapist</h4>
                            <p class="text-muted mb-3 small">Therapists matched to your needs</p>


                            <div class="card therapist-card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-2 col-12 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                                alt="Therapist" class="therapist-img">
                                        </div>
                                        <div class="col-xl-7 col-12">
                                            <div>
                                                <div class="therapist-name">Dr. Sarah Johnson</div>
                                                <div class="therapist-speciality">CBT, Anxiety</div>
                                                <div>
                                                    <span class="match-badge">95% MATCH</span>
                                                    <span class="rating">
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                    </span>
                                                    <span class="people-rated">(32 people rated)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-12 d-flex justify-content-center align-items-start">
                                            <button class="btn rounded-pill ">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card therapist-card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-2 col-12 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                                alt="Therapist" class="therapist-img">
                                        </div>
                                        <div class="col-xl-7 col-12">
                                            <div>
                                                <div class="therapist-name">Dr. Sarah Johnson</div>
                                                <div class="therapist-speciality">CBT, Anxiety</div>
                                                <div>
                                                    <span class="match-badge">95% MATCH</span>
                                                    <span class="rating">
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                    </span>
                                                    <span class="people-rated">(32 people rated)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-12 d-flex justify-content-center align-items-start">
                                            <button class="btn rounded-pill ">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card therapist-card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-2 col-12 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                                alt="Therapist" class="therapist-img">
                                        </div>
                                        <div class="col-xl-7 col-12">
                                            <div>
                                                <div class="therapist-name">Dr. Sarah Johnson</div>
                                                <div class="therapist-speciality">CBT, Anxiety</div>
                                                <div>
                                                    <span class="match-badge">95% MATCH</span>
                                                    <span class="rating">
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                    </span>
                                                    <span class="people-rated">(32 people rated)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-12 d-flex justify-content-center align-items-start">
                                            <button class="btn rounded-pill ">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card therapist-card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-2 col-12 d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                                alt="Therapist" class="therapist-img">
                                        </div>
                                        <div class="col-xl-7 col-12">
                                            <div>
                                                <div class="therapist-name">Dr. Sarah Johnson</div>
                                                <div class="therapist-speciality">CBT, Anxiety</div>
                                                <div>
                                                    <span class="match-badge">95% MATCH</span>
                                                    <span class="rating">
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                        <i class="ti ti-star-filled"></i>
                                                    </span>
                                                    <span class="people-rated">(32 people rated)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-12 d-flex justify-content-center align-items-start">
                                            <button class="btn rounded-pill ">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                {{-- upcoming sessions --}}
                <div class="col-md-6 col-12">
                    <!-- Session Item -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold mb-0 text-black">Upcoming Sessions</h4>
                            <p class="text-muted mb-3 small">Your scheduled appointments</p>

                            <div class="session-card">
                                <div class="d-flex flex-wrap justify-content-between align-items-start">
                                    <div class="mb-2">
                                        <h6 class="fw-bold mb-1">Follow-Up Session</h6>
                                        <p class="text-black mb-2">
                                            <i class="ti ti-clock"></i> <strong>4:30pm</strong> to
                                            <strong>6:00pm</strong> - 1h 30min
                                        </p>
                                    </div>
                                    <div class="session-date text-md-end text-start">
                                        <div class="badge-tomorrow">TOMORROW</div>
                                        <div class="fw-bold text-black small">22 Aug, 2025</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                                    <div class="d-flex align-items-center mb-2 mb-md-0">
                                        <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                            class="rounded-circle me-2" alt="Therapist" height="35" width="35">
                                        <span>Dr. Sarah Johnson</span>
                                    </div>
                                    <button class="btn join-btn w-md-auto">
                                        <i class="ti ti-video"></i> Join Session
                                    </button>
                                </div>
                            </div>

                            <div class="session-card">
                                <div class="d-flex flex-wrap justify-content-between align-items-start">
                                    <div class="mb-2">
                                        <h6 class="fw-bold mb-1">Follow-Up Session</h6>
                                        <p class="text-black mb-2">
                                            <i class="ti ti-clock"></i> <strong>4:30pm</strong> to
                                            <strong>6:00pm</strong> - 1h 30min
                                        </p>
                                    </div>
                                    <div class="session-date text-md-end text-start">
                                        <div class="badge-tomorrow">TOMORROW</div>
                                        <div class="fw-bold text-black small">22 Aug, 2025</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                                    <div class="d-flex align-items-center mb-2 mb-md-0">
                                        <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                            class="rounded-circle me-2" alt="Therapist" height="35" width="35">
                                        <span>Dr. Sarah Johnson</span>
                                    </div>
                                    <button class="btn join-btn w-md-auto">
                                        <i class="ti ti-video"></i> Join Session
                                    </button>
                                </div>
                            </div>

                            <div class="session-card">
                                <div class="d-flex flex-wrap justify-content-between align-items-start">
                                    <div class="mb-2">
                                        <h6 class="fw-bold mb-1">Follow-Up Session</h6>
                                        <p class="text-black mb-2">
                                            <i class="ti ti-clock"></i> <strong>4:30pm</strong> to
                                            <strong>6:00pm</strong> - 1h 30min
                                        </p>
                                    </div>
                                    <div class="session-date text-md-end text-start">
                                        <div class="badge-tomorrow">TOMORROW</div>
                                        <div class="fw-bold text-black small">22 Aug, 2025</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                                    <div class="d-flex align-items-center mb-2 mb-md-0">
                                        <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                            class="rounded-circle me-2" alt="Therapist" height="35" width="35">
                                        <span>Dr. Sarah Johnson</span>
                                    </div>
                                    <button class="btn join-btn w-md-auto">
                                        <i class="ti ti-video"></i> Join Session
                                    </button>
                                </div>
                            </div>

                            <div class="session-card">
                                <div class="d-flex flex-wrap justify-content-between align-items-start">
                                    <div class="mb-2">
                                        <h6 class="fw-bold mb-1">Follow-Up Session</h6>
                                        <p class="text-black mb-2">
                                            <i class="ti ti-clock"></i> <strong>4:30pm</strong> to
                                            <strong>6:00pm</strong> - 1h 30min
                                        </p>
                                    </div>
                                    <div class="session-date text-md-end text-start">
                                        <div class="badge-tomorrow">TOMORROW</div>
                                        <div class="fw-bold text-black small">22 Aug, 2025</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex flex-wrap justify-content-between align-items-center mt-3">
                                    <div class="d-flex align-items-center mb-2 mb-md-0">
                                        <img src="{{ asset('chat-assets/assets/img/avatars/recommended-therapist.png') }}"
                                            class="rounded-circle me-2" alt="Therapist" height="35" width="35">
                                        <span>Dr. Sarah Johnson</span>
                                    </div>
                                    <button class="btn join-btn w-md-auto">
                                        <i class="ti ti-video"></i> Join Session
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>


        </div>

    </div>
@endsection

@section('script')
@endsection
