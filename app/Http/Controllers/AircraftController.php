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

    public function create(Request $request)
{
    // Retrieve the data from the request
    $type = $request->input('type');
    $frame = $request->input('frame');
    $serviceability = $request->input('serviceability');
    $endurance = $request->input('endurance');
    $engineerGiveRemark = $request->input('engineergiveremark');

    // Create a new instance of the Aircraft model
    $aircraft = new Aircraft();
    $aircraft->type = $type;
    $aircraft->frameno = $frame;
    $aircraft->serviceability = $serviceability;
    $aircraft->endurance = $endurance;
    $aircraft->engineergiveremark = $engineerGiveRemark;

    // Save the new record to the database
    $aircraft->save();

    // Redirect the user back to the form page or a different page
    return redirect()->back()->with('success', 'Aircraft record created successfully.');
}

}
