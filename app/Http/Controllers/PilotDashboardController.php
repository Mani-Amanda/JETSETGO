<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;

class PilotDashboardController extends Controller
{
    //
    public function index()
    {
        // Fetch aircraft data
        $aircrafts = Aircraft::all();

        

        // Pass aircraft data to the view
        return view('pilot_dashboard', compact('aircrafts'));
    }
}
