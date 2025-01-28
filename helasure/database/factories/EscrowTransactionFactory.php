<?php

namespace Database\Factories;

use App\Models\EscrowTransaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscrowTransactionFactory extends Factory
{
    protected $model = EscrowTransaction::class;

    public function definition()
    {
        return [
            'buyer_id' => User::factory(),
            'seller_id' => User::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'delivered', 'completed', 'disputed']),
            'terms' => ['return_policy' => '30 days', 'delivery' => '5 days'],
            'deadline' => now()->addDays(5),
            'auto_release' => $this->faker->boolean(50),
        ];
    }
}
