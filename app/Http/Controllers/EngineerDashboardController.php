<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EngineerDashboardController extends Controller
{
    //
    public function index()
    {
        return view('engineer_dashboard');
    }
}
