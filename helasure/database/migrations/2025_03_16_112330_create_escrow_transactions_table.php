<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('escrow_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['pending', 'in_progress', 'delivered', 'completed', 'disputed'])->default('pending');
            $table->json('terms')->nullable(); // Store contract terms dynamically
            $table->timestamp('deadline')->nullable();
            $table->boolean('auto_release')->default(false); // Auto-release setting
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('escrow_transactions');
    }
};
