<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;

class PilotDashboardController extends Controller
{
    //
    public function index()
    {
        // Fetch all available aircraft types
        $types = Aircraft::pluck('type')->unique();

        // Fetch all aircrafts
        $aircrafts = Aircraft::all();

        // Pass data to the view
        return view('pilot_dashboard', compact('types', 'aircrafts'));
    }
}
