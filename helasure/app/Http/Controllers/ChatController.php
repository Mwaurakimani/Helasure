<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\EscrowTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index(EscrowTransaction $escrow)
    {
        $messages = ChatMessage::where('escrow_id', $escrow->id)
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }

    public function sendMessage(Request $request, EscrowTransaction $escrow)
    {
        $validated = $request->validate([
            'message' => 'required|string',
        ]);

        $message = ChatMessage::create([
            'escrow_id' => $escrow->id,
            'sender_id' => Auth::id(),
            'receiver_id' => ($escrow->buyer_id === Auth::id()) ? $escrow->seller_id : $escrow->buyer_id,
            'message' => $validated['message'],
        ]);

        return response()->json(['message' => 'Message sent', 'data' => $message]);
    }
}
