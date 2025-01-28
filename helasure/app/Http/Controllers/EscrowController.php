<?php

namespace App\Http\Controllers;

use App\Models\EscrowTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EscrowController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $transactions = EscrowTransaction::where('buyer_id', $user->id)
            ->orWhere('seller_id', $user->id)
            ->latest()
            ->get();

        return response()->json($transactions);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'seller_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:1',
            'terms' => 'nullable|array',
            'deadline' => 'nullable|date',
            'auto_release' => 'boolean',
        ]);

        $validated['buyer_id'] = Auth::id();
        $validated['status'] = 'pending';

        $transaction = EscrowTransaction::create($validated);

        return response()->json(['message' => 'Escrow created', 'data' => $transaction], 201);
    }

    public function show(EscrowTransaction $escrow)
    {
        return response()->json($escrow);
    }

    public function update(Request $request, EscrowTransaction $escrow)
    {
        $this->authorize('update', $escrow);

        $validated = $request->validate([
            'status' => 'required|in:pending,in_progress,delivered,completed,disputed',
        ]);

        $escrow->update($validated);

        return response()->json(['message' => 'Escrow updated', 'data' => $escrow]);
    }

    public function destroy(EscrowTransaction $escrow)
    {
        $this->authorize('delete', $escrow);
        $escrow->delete();

        return response()->json(['message' => 'Escrow deleted']);
    }
}
