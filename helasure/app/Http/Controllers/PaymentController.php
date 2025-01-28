<?php
namespace App\Http\Controllers;

use App\Models\EscrowTransaction;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function initiatePayment(Request $request, EscrowTransaction $escrow)
    {
        $validated = $request->validate([
            'payment_method' => 'required|in:onit,paypal,stripe,mpesa',
        ]);

        if ($escrow->status !== 'pending') {
            return response()->json(['error' => 'Payment cannot be initiated'], 400);
        }

        // Assume external payment logic is handled via a service
        $payment = Payment::create([
            'escrow_id' => $escrow->id,
            'payment_method' => $validated['payment_method'],
            'payment_status' => 'held',
        ]);

        return response()->json(['message' => 'Payment initiated', 'data' => $payment], 201);
    }

    public function releaseFunds(EscrowTransaction $escrow)
    {
        if ($escrow->status !== 'completed') {
            return response()->json(['error' => 'Funds cannot be released yet'], 400);
        }

        $payment = $escrow->payments;
        $payment->update(['payment_status' => 'released']);

        return response()->json(['message' => 'Funds released to seller']);
    }
}
