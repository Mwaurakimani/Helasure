<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'escrow_id', 'payment_method', 'payment_status', 'transaction_id', 'metadata'
    ];

    protected $casts = [
        'metadata' => 'array'
    ];

    public function escrowTransaction()
    {
        return $this->belongsTo(EscrowTransaction::class, 'escrow_id');
    }
}
