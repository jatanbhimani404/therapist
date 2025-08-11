<?php

namespace App\Http\Controllers;

use App\Exceptions\ChatException;
use App\Services\ChatBotService;
use Exception;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{

    public function __construct(public ChatBotService $chatbotService)
    {

    }

    public function view(string $token) {
        //
    }

    public function chat(Request $request) {
        try {
            $response = $this->chatbotService->chat($request);
            return $this->chatbotService->sendResponse('Chat completed', $response);
        } catch (ChatException $th) {
            return $this->chatbotService->sendException($th->getMessage());
        } catch (Exception $th) {
            return $this->chatbotService->sendError($th->getMessage());
        }
    }
}
