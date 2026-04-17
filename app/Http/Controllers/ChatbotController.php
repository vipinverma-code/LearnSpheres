<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\ChatHistory;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $userMessage = $request->message;

        $response = Http::timeout(120)->post(
            'http://localhost:11434/api/generate',
            [
                "model" => "phi3",
                "prompt" => $userMessage,
                "stream" => false
            ]
        );

        $data = json_decode($response->body(), true);

        $botReply = $data['response'] ?? 'AI did not respond';

        ChatHistory::create([
            'user_id' => auth()->id(),
            'question' => $userMessage,
            'answer' => $botReply
        ]);

        return response()->json([
            'reply' => $botReply
        ]);
    }
}
