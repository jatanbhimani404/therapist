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
                            <button class="btn bg-transparent border border-primary signin-btn">Sign In</button>
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
                                        In</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="chat-history-body" id="chat-body">
                    <ul class="list-unstyled chat-history" id="survey-questions">
                        <!-- First question is rendered -->
                        {{-- <li class="chat-message">
                            <div class="d-flex overflow-hidden">
                                <div class="user-avatar flex-shrink-0 me-3">
                                    <div class="avatar avatar-sm">
                                        <img src="{{ asset('chat-assets/assets/img/avatars/6.png') }}"
                                            class="rounded-circle" />
                                    </div>
                                </div>
                                <div class="chat-message-wrapper flex-grow-1">
                                    <div class="chat-message-text shadow-md bg-white">
                                        <p class="mb-0">Hello I am going to ask you few questions. What is your name?</p>
                                        <div class="mt-2" id="${questionId}-input"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="chat-message chat-message-right">
                            <div class="d-flex overflow-hidden justify-content-end">
                                <div class="chat-message-wrapper flex-grow-1">
                                    <div class="chat-message-text shadow-md">
                                        <p class="mb-0">My name is John Doe</p>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                    </ul>


                </div>
                <!-- Chat message form -->
                <div class="container-xl chat-history-footer bg-white shadow-sm d-block">
                    <form id="chat-form" class="d-flex justify-content-between align-items-center">
                        @csrf

                        <input id="chat-input" class="form-control message-input border-0 me-3 shadow-none chat-input"
                            placeholder="Type your message here" name="question" required />
                        {{-- <input type="hidden" value="{{ $token }}" id="auth_token" name="token"> --}}
                        {{-- <div class="dropdown me-2">
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
                        </div> --}}
                        <div class="me-2">
                            <i class="ti ti-microphone text-primary fs-3"></i>
                        </div>
                        <div class="message-actions d-flex align-items-center">
                            {{-- <i class="speech-to-text ti ti-microphone ti-sm cursor-pointer"></i> --}}
                            {{-- <label for="attach-doc" class="form-label mb-0">
                                <i class="ti ti-photo ti-sm cursor-pointer mx-3"></i>
                                <input type="file" id="attach-doc" hidden />
                            </label> --}}
                            <button class="btn btn-primary d-flex send-btn text-primary" id="send-btn" type="submit">
                                <i class="ti ti-send me-md-1 me-0"></i>
                                <span class="align-middle d-md-inline-block d-none">Send</span>
                            </button>
                        </div>
                    </form>
                </div>

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
        let chatHistory = [];
        $(document).ready(function() {

            // Function to add bot question
            function addBotMessage(text) {
                $("#survey-questions").append(`
            <li class="chat-message">
                <div class="d-flex overflow-hidden">
                    <div class="user-avatar flex-shrink-0 me-3">
                        <div class="avatar avatar-sm">
                            <img src="{{ asset('chat-assets/assets/img/avatars/6.png') }}" class="rounded-circle" />
                        </div>
                    </div>
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text shadow-md bg-white">
                            <p class="mb-0">${text}</p>
                        </div>
                    </div>
                </div>
            </li>
        `);
                scrollToBottom();
            }

            // Function to add user answer
            function addUserMessage(text) {
                $("#survey-questions").append(`
            <li class="chat-message chat-message-right">
                <div class="d-flex overflow-hidden justify-content-end">
                    <div class="chat-message-wrapper flex-grow-1">
                        <div class="chat-message-text shadow-md">
                            <p class="mb-0">${text}</p>
                        </div>
                    </div>
                </div>
            </li>
        `);
                scrollToBottom();
            }

            // Scroll to latest message
            function scrollToBottom() {
                $("#chat-body").scrollTop($("#chat-body")[0].scrollHeight);
            }

            // Ask the first question
            addBotMessage();

            // Handle form submission
            $("#chat-form").on("submit", function(e) {
                e.preventDefault();
                $('#send-btn').attr('disabled', true);
                let answer = $("#chat-input").val().trim();
                if (answer === "") return;

                // Add user's message
                addUserMessage(answer);

                $("#chat-input").val(""); // clear input

                $.ajax({
                    type: "POST",
                    url: "{{ route('chat.prompt') }}",
                    data: JSON.stringify({
                        _token: "{{ csrf_token() }}", // ✅ Add CSRF token here
                        conversation: chatHistory,
                        user_type: user_type,
                        token: auth_token,
                        user_id: user_id,
                        study_mode: isStudyModeActive()
                    }),
                    contentType: "application/json",
                    success: function(response) {
                        hideTypingIndicator();
                        if (response.status == 200) {
                            let botMessage = response.data;

                            chatHistory.push({
                                role: 'assistant',
                                content: botMessage
                            });

                            addBotMessage(botMessage);
                            scrollToBottom(chatBody);
                        } else {
                            toastr.error(response.message);
                            chatHistory.pop();
                        }
                    },
                    error: function(error) {
                        toastr.error('Something went wrong.');
                        chatHistory.pop();
                    },
                    complete: function() {
                        $('#send-btn').attr('disabled', false);
                    }
                });



                // $('#send-btn').attr('disabled', false);
            });
        });
    </script>
@endsection
