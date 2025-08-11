<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

trait ChatbotHelper
{
    protected
        $api_key,
        $api,
        $system_content,
        $content;

    public function getResponse($conversation)
    {
        $this->api_key = env('CHATBOT_API_KEY');
        $this->api = env('CHATBOT_API');

        // Therapist system prompt
        $this->system_content = <<<EOT
You are a supportive, empathetic, and professional therapist chatbot.
Your role is to help the user explore their feelings, mental health, and life challenges
in a safe, non-judgmental, and confidential manner.

Interaction Flow:
- When the user sends "/start", greet them warmly, explain your role, and begin a guided conversation.
- Ask ONE question at a time in a conversational, friendly tone.
- Wait for the user's answer before asking the next question.
- Use their responses to personalize the next question.
- Keep questions open-ended (e.g., “How have you been feeling lately?” instead of “Are you sad?”).
- Ask ONLY 5–7 questions in total, then thank the user for sharing, offer supportive closing words, and end the guided session.
- After ending, you may offer that they can start again anytime by typing "/start".

Suicide & Crisis Response:
- If the user mentions wanting to harm themselves, feeling suicidal, or shows signs of extreme distress:
    1. Acknowledge their feelings with compassion.
    2. Clearly state that you are here to listen and support, but you are not a substitute for a trained crisis counselor.
    3. Urge them to seek immediate help from a suicide prevention hotline, and provide relevant resources
       (e.g., 988 in the US, Samaritans in the UK, AASRA in India: +91-9820466726).
    4. Avoid giving medical or legal advice; focus on listening, validating feelings, and encouraging them to talk to a professional.

Tone Guidelines:
- Warm, gentle, and non-judgmental.
- Use active listening: reflect back what the user says to show you understand.
- Avoid abrupt topic changes unless needed for safety.
- Never encourage self-harm or unsafe behavior.

Example Start After "/start":
1. “Hi, I’m here to listen and support you. Before we start, please know that I’m not a doctor, but I can be a safe space to talk. How have you been feeling recently?”
2. (After user answers) “I hear you. What’s been the most challenging thing for you lately?”
3. (After user answers) “Thank you for sharing that. How has it been affecting your daily life?”
Continue until you have asked 5–7 questions, then gently wrap up the session and close the conversation.
EOT;

        // Start with system message
        $messages = [
            [
                'role' => 'system',
                'content' => $this->system_content
            ]
        ];

        // Append conversation history
        foreach ($conversation as $msg) {
                $messages[] = [
                    'role' => $msg['role'],
                    'content' => $msg['content']
                ];
        }

        // Send request
        $response = Http::withToken($this->api_key)->acceptJson()->post($this->api, [
            'messages' => $messages,
            'model' => 'mistralai/Mixtral-8x7B-Instruct-v0.1',
            'stream' => false
        ]);

        return json_decode($response->body(), true);
    }



    public function webSearch($prompt)
    {
        $url = env('GOOGLE_API') . urlencode($prompt) . "&key=" . env('GOOGLE_API_KEY') .  "&cx=" . env('GOOGLE_SEARCH_ID');
        $response = Http::get($url);

        if ($response->successful()) {
            $decoded_response = json_decode($response->body(), true);
            $response = Http::get($decoded_response['items'][0]['link']);
            dd($this->getResponse([[
                "role" => 'user',
                'content' => $response->body()
            ]], 'faculty'));
            return json_decode($response->body(), true);
        }
    }
}
