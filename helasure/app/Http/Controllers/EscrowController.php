<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class EscrowController extends Controller
{

    public function index(): \Inertia\Response
    {
        return Inertia::render('Dashboard/Escrows/Index');
    }
    public function create()
    {
        return Inertia::render('Escrows/Partials/CreateEscrowFlow');
    }
}
