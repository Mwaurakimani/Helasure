<?php

namespace Database\Seeders;

use App\Models\ChatMessage;
use App\Models\Dispute;
use App\Models\EscrowTransaction;
use App\Models\Payment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        EscrowTransaction::factory(10)->create();
        Payment::factory(10)->create();
        Dispute::factory(5)->create();
        ChatMessage::factory(20)->create();
    }

}
