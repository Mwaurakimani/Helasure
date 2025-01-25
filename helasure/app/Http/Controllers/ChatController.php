<?php

namespace App\Http\Controllers;

use App\Jobs\BroadcastJob;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request): array
    {
        $data = $request->input('message');

        BroadcastJob::dispatch($data);

        return [
            'message' => $data,
            'success' => true
        ];
    }
}
