<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <title>
        Chat | Edu-Chatbot
    </title>
    @include('admin.layouts.elements.head')
    <style>
        .chat-bubble {
            max-width: 70%;
            word-wrap: break-word;
        }

        .chat-bubble.me {
            background-color: #0d6efd;
            color: white;
        }

        .chat-bubble.other {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>

<body>
    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    @if (Session::has('error_message'))
        <div class="alert alert-danger">
            {{ Session::get('error_message') }}
        </div>
    @endif

    <div class="chat-wrapper container-fluid p-0 d-flex flex-column" style="height: 100vh;">
        <!-- Header -->
        <div class="chat-header d-flex align-items-center p-3 border-bottom bg-dark">
            <div>
                <div class="fw-semibold text-white">Edu-Chatbot</div>
            </div>
        </div>

        <!-- Chat Body -->
        <div id="chat-body" class="chat-body flex-grow-1 p-3 overflow-auto d-flex flex-column text-white"
            style="height: calc(100vh - 150px);">
            <!-- Initial system message -->

        </div>

        <!-- Input -->
        <form id="chat-form" class="chat-input d-flex align-items-center p-3 border-top bg-dark">
            @csrf
            <input id="chat-input" class="form-control me-2 bg-white border-0 text-black"
                placeholder="Type your message here..." name="question" required />
            <input type="hidden" value="{{ $token }}" id="auth_token" name="token">
            <button class="btn btn-primary d-flex align-items-center gap-1" id="send-btn" type="submit">
                Send <i class="bi bi-send"></i>
            </button>
        </form>
    </div>

    @include('admin.layouts.elements.footer_script')

    <!-- Login Modal -->
    <div class="modal fade" id="login-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Login</h5>
                </div>
                <form id="login-user">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="modal-body">
                        <p>Select User Type</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="user_type" value="faculty"
                                id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1">Faculty</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input " type="radio" name="user_type" value="student"
                                id="radioDefault2" checked>
                            <label class="form-check-label" for="radioDefault2">Student</label>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Enter Your Unique ID<span class="text-danger">*</span></label>
                            <input type="text" id="country-en" class="form-control" placeholder="Enter Your ID"
                                name="user_id" required maxlength="50" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submit-btn" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var hasCompletedLogin = false;

        var typingIndicator = `
                    <div class="d-flex mb-3 justify-content-start typing-indicator" id="typing-indicator">
                        <div class="chat-bubble other p-2 rounded">
                            <div class="dots">
                                ....
                            </div>
                        </div>
                    </div>
                `;

        var chatBody = $('#chat-body');

        function scrollToBottom(chatBody) {
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        function showTypingIndicator() {
            $('#chat-body').append(typingIndicator);
        }

        function hideTypingIndicator() {
            $('#typing-indicator').remove();
        }

        $(document).ready(function() {
            if (!hasCompletedLogin) {
                const modalEl = document.getElementById('login-modal');
                const loginModal = bootstrap.Modal.getOrCreateInstance(modalEl);
                loginModal.show();
            }




            let chatHistory = []; // Stores all messages

            $('#chat-form').on('submit', function(e) {
                e.preventDefault();
                $('#send-btn').attr('disabled', true);

                var userMessage = $("#chat-input").val();
                var user_type = $("input[name='user_type']").val();
                var auth_token = $('#auth_token').val();
                // Append user message in UI
                $('#chat-body').append(`
                    <div class="d-flex mb-3 justify-content-end">
                        <div class="chat-bubble me p-2 rounded">${userMessage}</div>
                    </div>
                `);
                $('#chat-input').val('');
                scrollToBottom(chatBody);

                // Add user message to chat history
                chatHistory.push({
                    role: 'user',
                    content: userMessage
                });

                // Show typing indicator
                showTypingIndicator();

                $.ajax({
                    type: "POST",
                    url: "{{ route('chat.prompt') }}",
                    data: JSON.stringify({
                        _token: "{{ csrf_token() }}", // ✅ Add CSRF token here
                        conversation: chatHistory,
                        user_type : user_type,
                        token : auth_token
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

                            $('#chat-body').append(`
                    <div class="d-flex mb-3 justify-content-start">
                        <div class="chat-bubble other p-2 rounded">${botMessage.replace(/\n/g, '<br>')}</div>
                    </div>
                `);
                            scrollToBottom(chatBody);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(error) {
                        hideTypingIndicator();
                        toastr.error('Something went wrong.');
                    },
                    complete: function() {
                        $('#send-btn').attr('disabled', false);
                    }
                });
            });


            // Login form
            $('#login-user').submit(function(e) {
                e.preventDefault();
                $('#submit-btn').attr('disabled', true);
                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ route('chat.check.user') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == 200) {
                            toastr.success(response.message);
                            $('#login-user')[0].reset();

                            const modalEl = document.getElementById('login-modal');
                            const loginModal = bootstrap.Modal.getOrCreateInstance(modalEl);
                            loginModal.hide();

                            hasCompletedLogin = true;

                            $('#chat-body').append(`<div class="d-flex mb-3 justify-content-start">
                                <div class="chat-bubble other p-2 rounded">
                                    <div>Hello! How can I help you today?</div>
                                </div>
                            </div>`);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(error) {
                        toastr.error(JSON.parse(error.responseText).message);
                    },
                    complete: function() {
                        $("#submit-btn").attr('disabled', false);
                    }
                });
            });
        });
    </script>
</body>

</html>
