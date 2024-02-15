<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    //
    public function index()
    {
        $aircrafts = Aircraft::all();
        return view('aircrafts.index', compact('aircrafts'));
    }
}
