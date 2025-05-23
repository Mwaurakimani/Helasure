<?php

    namespace App\Http\Controllers\Dashboard;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Inertia\Inertia;

    class DashboardController extends Controller {

        public function index(Request $request): \Inertia\Response
        {
            return Inertia::render('Dashboard');
        }
    }
