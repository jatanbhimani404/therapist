<?php
namespace App\Services;

use App\Helpers\ChatbotHelper;
use App\Helpers\CommonHelper;
use App\Helpers\CommonResponseHelper;

class ChatbotService {
    use CommonHelper, ChatbotHelper, CommonResponseHelper;


    /**
     * Chatbot message will be triggered from here.
     *
     * @params App\Http\Requests\Request $request
     * @params App\Models\User $user
     *
     * @return string $response
     *
     * @throws \Throwable $th
     */

    public function chat($request)
    {
        try {

            $response = $this->getResponse($request->conversation);
            // dd($response);
            return $response['choices'][0]['message']['content'];
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
