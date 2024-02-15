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
    $fuel = $request->input('fuel');
    $metric = $request->input('metric');
    $mission = $request->input('mission');
    $setElapseTime = $request->has('setelapsetime'); // Checkbox value
    $elapseTime = $request->input('elapsetime');
    $endurance = $request->input('endurance');
    $etd = $request->input('etd');
    $etdField = $request->input('etdfeild');
    $eta = $request->input('eta');
    $etaField = $request->input('etafeild');
    $pilotGiveRemark = $request->input('pilotgiveremark');
    $engineerGiveRemark = $request->input('engineergiveremark');
    $radarSurveillance = $request->has('radarradarsurveillance'); // Checkbox value
    $adcNo = $request->input('adcno');
    $captain = $request->input('captain');
    $copilot = $request->input('copilot');

    // Create a new instance of the Aircraft model
    $aircraft = new Aircraft();
    $aircraft->type = $type;
    $aircraft->frameno = $frame;
    $aircraft->serviceability = $serviceability;
    $aircraft->fuel = $fuel;
    $aircraft->metric = $metric;
    $aircraft->mission = $mission;
    $aircraft->setelapsetime = $setElapseTime;
    $aircraft->elapsetime = $elapseTime;
    $aircraft->endurance = $endurance;
    $aircraft->etd = $etd;
    $aircraft->etdfeild = $etdField;
    $aircraft->eta = $eta;
    $aircraft->etafeild = $etaField;
    $aircraft->pilotgiveremark = $pilotGiveRemark;
    $aircraft->engineergiveremark = $engineerGiveRemark;
    $aircraft->radarradarsurveillance = $radarSurveillance;
    $aircraft->adcno = $adcNo;
    $aircraft->captain = $captain;
    $aircraft->copilot = $copilot;

    // Save the new record to the database
    $aircraft->save();

    // Redirect the user back to the form page or a different page
    return redirect()->back()->with('success', 'Aircraft record created successfully.');
}

}
