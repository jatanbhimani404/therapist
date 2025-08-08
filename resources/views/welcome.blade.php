<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey Chat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f7f5f2 url('https://www.transparenttextures.com/patterns/soft-wallpaper.png') repeat;
      font-family: Arial, sans-serif;
    }
    .chat-container {
      max-width: 900px;
      margin: 30px auto;
      background: transparent;
      border-radius: 10px;
      padding: 20px;
    }
    .chat-message {
      display: flex;
      align-items: flex-start;
      margin-bottom: 15px;
    }
    .chat-message img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
    }
    .message-text {
      background: #fff;
      border-radius: 15px;
      padding: 15px;
      margin-left: 10px;
      max-width: 70%;
      font-size: 15px;
      color: #333;
    }
    .message-text.user {
      background: #6a93b5;
      color: #fff;
      margin-left: auto;
      margin-right: 10px;
    }
    .chat-footer {
      display: flex;
      align-items: center;
      background: #fff;
      border-radius: 50px;
      padding: 10px 20px;
      margin-top: 20px;
    }
    .chat-footer input {
      border: none;
      flex: 1;
      outline: none;
      font-size: 14px;
    }
    .chat-footer button {
      border: none;
      background: #6a93b5;
      color: #fff;
      border-radius: 50px;
      padding: 8px 20px;
      font-size: 14px;
      display: flex;
      align-items: center;
    }
    .chat-footer i {
      font-size: 18px;
      margin-left: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Navbar -->
    <div class="d-flex justify-content-between align-items-center py-3">
      <h3 class="fw-bold">HealBridge</h3>
      <div>
        <button class="btn btn-outline-dark rounded-pill me-2">Log In</button>
        <button class="btn btn-dark rounded-pill">Sign Up</button>
      </div>
    </div>

    <!-- Chat Container -->
    <div class="chat-container">
      <!-- Therapist message -->
      <div class="chat-message">
        <img src="https://via.placeholder.com/40" alt="Avatar">
        <div class="message-text">
          Hi, I am Erica Johnson...<br>
          I'm glad you're here today. Before we begin, I just want you to know—this space is completely safe, private, and judgment-free.
          <br>How are you feeling right now, in this moment?
        </div>
      </div>

      <!-- User message -->
      <div class="chat-message justify-content-end">
        <div class="message-text user">
          Honestly? I'm not even sure. Just... tired. Emotionally more than anything.
        </div>
      </div>

      <!-- Therapist message -->
      <div class="chat-message">
        <img src="https://via.placeholder.com/40" alt="Avatar">
        <div class="message-text">
          Thank you for sharing that—it takes courage to be honest, especially when things feel blurry. When you say “emotionally tired,” can you tell me more about what that looks like in your day-to-day?
        </div>
      </div>

      <!-- User message -->
      <div class="chat-message justify-content-end">
        <div class="message-text user">
          I feel like I'm always holding everything in. Like I'm pretending to be okay for everyone else. But inside, I'm anxious, sad, and just... disconnected.
        </div>
      </div>

      <!-- Add more messages similarly -->
    </div>

    <!-- Chat Footer -->
    <div class="chat-footer">
      <input type="text" placeholder="Type your response">
      <button>
        SEND
        <i class="bi bi-mic"></i>
      </button>
    </div>
  </div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
