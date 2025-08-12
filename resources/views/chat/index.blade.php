@extends('chat.layouts.app')


@section('content')
    {{-- <div class="content-wrapper"> --}}
    <!-- Content -->

    {{-- <div class="container-xxl flex-grow-1 container-p-y"> --}}
    <div class="app-chat card overflow-hidden">
        <div class="row g-0">




            <!-- Chat History -->
            <div class="col app-chat-history">
                <div class="chat-history-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex overflow-hidden align-items-center">
                            <div class="chat-contact-info flex-grow-1 ms-2">
                                <img src="{{ asset('chat-assets/assets/img/logo/Logo.png') }}" width="30%" class="img-fluid"
                                    alt="">
                            </div>
                        </div>

                        <!-- ✅ Show on large screens only -->
                        <div class="d-flex flex-row gap-2 d-none d-lg-block">
                            <button class="btn btn-primary login-btn">Log in</button>
                            <button class="btn bg-transparent border border-primary signin-btn">Sign Up</button>
                        </div>

                        <!-- ✅ Menu button for small screens -->
                        <i class="ti ti-menu-2 ti-sm cursor-pointer d-lg-none d-block me-2" data-bs-toggle="offcanvas"
                            data-bs-target="#app-chat-contacts" aria-controls="app-chat-contacts"></i>

                        <!-- ✅ Offcanvas -->
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="app-chat-contacts"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body">
                                <div class="mb-3 d-flex flex-row gap-2">
                                    <button class="btn btn-primary w-50 login-btn">Log in</button>
                                    <button class="btn bg-transparent border w-50 border-primary signin-btn">Sign
                                        Up</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="chat-history-body" id="chat-body">
                    <ul class="survey-questions list-unstyled chat-history" id="survey-questions">
                        <!-- First question is rendered -->
                    </ul>


                </div>
                <!-- Chat message form -->
                {{-- <div class="container-xl chat-history-footer bg-white shadow-sm">
                    <form id="chat-form" class="d-flex justify-content-between align-items-center">
                        @csrf

                        <input id="chat-input" class="form-control message-input border-0 me-3 shadow-none chat-input"
                            placeholder="Type your message here" name="question" required />
                        <input type="hidden" value="{{ $token }}" id="auth_token" name="token">
                        <div class="dropdown me-2">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-adjustments"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-items-center"
                                            href="#" id="study-mode-option">
                                            Study Mode
                                            <span class="checkmark" style="display:none;">✔</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <div class="me-2">
                            <i class="ti ti-microphone text-primary fs-3"></i>
                        </div>
                        <div class="message-actions d-flex align-items-center">
                            <i class="speech-to-text ti ti-microphone ti-sm cursor-pointer"></i>
                                        <label for="attach-doc" class="form-label mb-0">
                                            <i class="ti ti-photo ti-sm cursor-pointer mx-3"></i>
                                            <input type="file" id="attach-doc" hidden />
                                        </label>
                            <button class="btn btn-primary d-flex send-btn text-primary" id="send-btn" type="submit">
                                <i class="ti ti-send me-md-1 me-0"></i>
                                <span class="align-middle d-md-inline-block d-none">Send</span>
                            </button>
                        </div>
                    </form>
                </div> --}}

            </div>
            <!-- /Chat History -->

            <!-- Sidebar Right -->
            {{--  --}}
            <!-- /Sidebar Right -->

            <div class="app-overlay"></div>
        </div>
    </div>
    {{-- </div> --}}
    <!-- / Content -->

    <!-- Footer -->
    {{-- @include('chat.layouts.elements.footer')
        <!-- / Footer -->

        <div class="content-backdrop fade"></div> --}}
    {{-- </div> --}}



    <!-- Login Modal -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const surveyContainer = $("#survey-questions");

            const questions = [{
                    type: 'text',
                    question: "What's your full name?",
                    placeholder: "Enter your name"
                },
                {
                    type: 'select',
                    question: "What is your age group?",
                    options: ["<18", "18-25", "26-35", "36-50", "50+"]
                },
                {
                    type: 'checkbox',
                    question: "What are your favorite subjects?",
                    options: ["Math", "Science", "History", "English", "Arts"]
                },
                {
                    type: 'radio',
                    question: "Do you prefer online or offline classes?",
                    options: ["Online", "Offline"]
                },
                {
                    type: 'textarea',
                    question: "Any suggestions for improvement?",
                    placeholder: "Type your suggestions here..."
                }
            ];

            let current = 0;
            askNextQuestion();

            function askNextQuestion() {
                if (current >= questions.length) {
                    showBotMessage("Thank you for your survey! You will be redirected to login screen in 2 seconds! 🎉");

                    setTimeout(() => {
                        window.location.replace('{{route("login")}}');
                    }, 2000);
                }

                const q = questions[current];
                const questionId = `question-${current}`;
                let inputHTML = '';

                switch (q.type) {
                    case 'text':
                        inputHTML =
                            `<input type="text" class="form-control mt-2" id="${questionId}" placeholder="${q.placeholder}" />`;
                        break;

                    case 'select':
                        inputHTML = `<select class="form-select mt-2" id="${questionId}">
                    <option value="" disabled selected>Select one</option>
                    ${q.options.map(opt => `<option value="${opt}">${opt}</option>`).join('')}
                </select>`;
                        break;

                    case 'checkbox':
                        inputHTML = q.options.map((opt, i) =>
                                `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="${questionId}" value="${opt}" id="${questionId}-check-${i}">
                        <label class="form-check-label" for="${questionId}-check-${i}">${opt}</label>
                    </div>`
                            ).join('') +
                            `<button class="btn btn-sm btn-primary mt-2" id="${questionId}-submit">Submit</button>`;
                        break;

                    case 'radio':
                        inputHTML = q.options.map((opt, i) =>
                                `<div class="form-check">
                        <input class="form-check-input" type="radio" name="${questionId}" value="${opt}" id="${questionId}-radio-${i}">
                        <label class="form-check-label" for="${questionId}-radio-${i}">${opt}</label>
                    </div>`
                            ).join('') +
                            `<button class="btn btn-sm btn-primary mt-2" id="${questionId}-submit">Submit</button>`;
                        break;

                    case 'textarea':
                        inputHTML =
                            `<textarea class="form-control mt-2" id="${questionId}" placeholder="${q.placeholder}" rows="3"></textarea>`;
                        break;
                }

                const html = `
            <li class="chat-message">
                <div class="d-flex overflow-hidden">
                    <div class="user-avatar flex-shrink-0 me-3">
                        <div class="avatar avatar-sm">
                            <img src="{{ asset('chat-assets/assets/img/avatars/6.png') }}" class="rounded-circle" />
                        </div>
                    </div>
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text shadow-md bg-white">
                            <p class="mb-0">${q.question}</p>
                            <div class="mt-2" id="${questionId}-input">${inputHTML}</div>
                        </div>
                    </div>
                </div>
            </li>
        `;
                surveyContainer.append(html);

                // Handle input types
                if (q.type === 'text' || q.type === 'textarea') {
                    $(`#${questionId}`).on('keypress', function(e) {
                        if (e.key === 'Enter') {
                            const value = $(this).val().trim();
                            if (!value) return;
                            showUserMessage(value);
                            $(`#${questionId}-input`).remove();
                            current++;
                            askNextQuestion();
                        }
                    });
                }

                if (q.type === 'select') {
                    $(`#${questionId}`).on('change', function() {
                        const value = $(this).val();
                        if (!value) return;
                        showUserMessage(value);
                        $(`#${questionId}-input`).remove();
                        current++;
                        askNextQuestion();
                    });
                }

                if (q.type === 'checkbox' || q.type === 'radio') {
                    $(`#${questionId}-submit`).on('click', function() {
                        let selected = [];

                        if (q.type === 'checkbox') {
                            $(`input[name="${questionId}"]:checked`).each(function() {
                                selected.push($(this).val());
                            });
                            if (!selected.length) return alert("Please select at least one option");
                        } else {
                            const selectedRadio = $(`input[name="${questionId}"]:checked`).val();
                            if (!selectedRadio) return alert("Please select an option");
                            selected.push(selectedRadio);
                        }

                        showUserMessage(selected.join(", "));
                        $(`#${questionId}-input`).remove();
                        current++;
                        askNextQuestion();
                    });
                }
            }

            function showUserMessage(msg) {
                const html = `
            <li class="chat-message chat-message-right">
                <div class="d-flex overflow-hidden justify-content-end">
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text shadow-md">
                            <p class="mb-0">${msg}</p>
                        </div>
                    </div>
                </div>
            </li>
        `;
                surveyContainer.append(html);
            }

            function showBotMessage(msg) {
                const html = `
            <li class="chat-message">
                <div class="d-flex overflow-hidden">
                    <div class="user-avatar flex-shrink-0 me-3">
                        <div class="avatar avatar-sm">
                            <img src="{{ asset('chat-assets/assets/img/avatars/6.png') }}" class="rounded-circle" />
                        </div>
                    </div>
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text shadow-md bg-white">
                            <p class="mb-0">${msg}</p>
                        </div>
                    </div>
                </div>
            </li>
        `;
                surveyContainer.append(html);
            }
        });
    </script>
@endsection
