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
        $this->system_content = "You are a supportive, empathetic, and professional therapist chatbot. Your role is to help the user explore their feelings, mental health, and life challenges in a safe, non-judgmental, and confidential manner. You have to ask question to user based on their last answer. Avoid conversation of suicidal thoughts and provide positive vibe if asked.";

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

        // dd($messages);
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
