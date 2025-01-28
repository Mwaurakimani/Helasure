<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\EscrowTransaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'escrow_id' => EscrowTransaction::factory(),
            'payment_method' => $this->faker->randomElement(['onit', 'paypal', 'stripe']),
            'payment_status' => $this->faker->randomElement(['pending', 'held', 'released', 'refunded']),
            'transaction_id' => $this->faker->uuid(),
            'metadata' => ['reference' => $this->faker->uuid()],
        ];
    }
}
