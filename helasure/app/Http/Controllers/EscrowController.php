<?php

namespace App\Http\Controllers;

use App\Models\EscrowTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class EscrowController extends Controller
{
    public function create()
    {
        return Inertia::render('Escrows/Partials/CreateEscrowFlow');
    }
}
