<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escrow_id')->constrained('escrow_transactions')->onDelete('cascade');
            $table->enum('payment_method', ['onit', 'paypal', 'stripe', 'mpesa']);
            $table->enum('payment_status', ['pending', 'held', 'released', 'refunded'])->default('pending');
            $table->string('transaction_id')->nullable(); // External payment gateway ID
            $table->json('metadata')->nullable(); // Store gateway response details
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
