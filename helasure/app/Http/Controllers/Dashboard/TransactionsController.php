<?php

    namespace App\Http\Controllers\Dashboard;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Inertia\Inertia;

    class TransactionsController extends Controller {
        public function index(): \Inertia\Response
        {
            return Inertia::render('Dashboard/Transactions/index');
        }
    }
