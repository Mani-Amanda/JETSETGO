<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnicianDashboardController extends Controller
{
    //
    public function index()
    {
        return view('technician_dashboard');
    }
}
