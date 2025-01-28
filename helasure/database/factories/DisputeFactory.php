<?php

namespace Database\Factories;

use App\Models\Dispute;
use App\Models\EscrowTransaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DisputeFactory extends Factory
{
    protected $model = Dispute::class;

    public function definition()
    {
        return [
            'escrow_id' => EscrowTransaction::factory(),
            'buyer_id' => User::factory(),
            'seller_id' => User::factory(),
            'buyer_claim' => $this->faker->sentence(),
            'seller_response' => null,
            'status' => 'open',
            'evidence' => ['image' => $this->faker->imageUrl()],
        ];
    }
}
