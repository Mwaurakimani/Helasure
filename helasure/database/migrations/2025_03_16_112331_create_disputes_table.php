<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('disputes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escrow_id')->constrained('escrow_transactions')->onDelete('cascade');
            $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->text('buyer_claim'); // Buyer’s complaint
            $table->text('seller_response')->nullable(); // Seller’s response
            $table->enum('status', ['open', 'resolved', 'rejected'])->default('open');
            $table->json('evidence')->nullable(); // Images, files, etc.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('disputes');
    }
};
