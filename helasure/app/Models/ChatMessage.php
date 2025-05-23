<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'escrow_id', 'sender_id', 'receiver_id', 'message', 'is_read'
    ];

    protected $casts = [
        'is_read' => 'boolean'
    ];

    public function escrowTransaction()
    {
        return $this->belongsTo(EscrowTransaction::class, 'escrow_id');
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
