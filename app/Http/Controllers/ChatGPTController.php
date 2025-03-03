<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatGPTController extends Controller
{
    public function askChatGPT(Request $request)
    {
        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo', // Cambia a 'gpt-4' si tienes acceso
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                    ['role' => 'user', 'content' => $request->input('prompt')],
                ],
                'max_tokens' => 169,
            ],
        ]);

        $body = json_decode($response->getBody(), true);
        return response()->json($body['choices'][0]['message']['content']);
    }
}
