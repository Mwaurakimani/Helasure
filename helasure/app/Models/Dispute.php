<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispute extends Model
{
    use HasFactory;

    protected $fillable = [
        'escrow_id', 'buyer_id', 'seller_id', 'buyer_claim', 'seller_response', 'status', 'evidence'
    ];

    protected $casts = [
        'evidence' => 'array'
    ];

    public function escrowTransaction()
    {
        return $this->belongsTo(EscrowTransaction::class, 'escrow_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}

