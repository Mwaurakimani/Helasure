<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscrowTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id', 'seller_id', 'amount', 'status', 'terms', 'deadline', 'auto_release'
    ];

    protected $casts = [
        'terms' => 'array', // JSON conversion
        'auto_release' => 'boolean'
    ];

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class, 'escrow_id');
    }

    public function disputes()
    {
        return $this->hasOne(Dispute::class, 'escrow_id');
    }

    public function chatMessages()
    {
        return $this->hasMany(ChatMessage::class, 'escrow_id');
    }
}
