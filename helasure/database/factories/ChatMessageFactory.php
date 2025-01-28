<?php

namespace Database\Factories;

use App\Models\ChatMessage;
use App\Models\EscrowTransaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatMessageFactory extends Factory
{
    protected $model = ChatMessage::class;

    public function definition()
    {
        return [
            'escrow_id' => EscrowTransaction::factory(),
            'sender_id' => User::factory(),
            'receiver_id' => User::factory(),
            'message' => $this->faker->sentence(),
            'is_read' => $this->faker->boolean(70),
        ];
    }
}
