<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; 

use Illuminate\Http\Request;
use Illuminate\View\View; 


class DashboardController extends Controller
{
    /**
     * Display the user's specific external dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // Get the currently authenticated user.
        $user = Auth::user();

        $dashboardUrl = $user->dashboard_url ?? null;

        return view('dashboard', [
            'dashboardUrl' => $dashboardUrl,
        ]);
    }
}