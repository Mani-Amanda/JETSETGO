<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;

class EngineerDashboardController extends Controller
{
    //
    public function index()
    {
        // Fetch aircraft data
        $aircrafts = Aircraft::all();

        

        // Pass aircraft data to the view
        return view('engineer_dashboard', compact('aircrafts'));
    }
}
