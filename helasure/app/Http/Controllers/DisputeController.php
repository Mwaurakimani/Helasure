<?php
namespace App\Http\Controllers;

use App\Models\Dispute;
use App\Models\EscrowTransaction;
use Illuminate\Http\Request;

class DisputeController extends Controller
{
    public function store(Request $request, EscrowTransaction $escrow)
    {
        $validated = $request->validate([
            'buyer_claim' => 'required|string',
            'evidence' => 'nullable|array',
        ]);

        if ($escrow->status === 'disputed') {
            return response()->json(['error' => 'Dispute already exists'], 400);
        }

        $dispute = Dispute::create([
            'escrow_id' => $escrow->id,
            'buyer_id' => auth()->id(),
            'seller_id' => $escrow->seller_id,
            'buyer_claim' => $validated['buyer_claim'],
            'evidence' => $validated['evidence'] ?? [],
            'status' => 'open',
        ]);

        $escrow->update(['status' => 'disputed']);

        return response()->json(['message' => 'Dispute created', 'data' => $dispute], 201);
    }

    public function resolve(Request $request, Dispute $dispute)
    {
        $validated = $request->validate([
            'seller_response' => 'required|string',
            'status' => 'required|in:resolved,rejected',
        ]);

        $dispute->update($validated);

        return response()->json(['message' => 'Dispute updated', 'data' => $dispute]);
    }
}
