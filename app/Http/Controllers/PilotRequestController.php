<?php

namespace App\Http\Controllers;

use App\Models\PilotRequest;
use Illuminate\Http\Request;

class PilotRequestController extends Controller
{
    public function index()
    {
        $pilotrequests = PilotRequest::all(); // Corrected variable name
        return view('pilotrequests.index', compact('pilotrequests'));
    }

    public function create(Request $request)
    {
        // Retrieve the data from the request
        $type = $request->input('type');
        $frame = $request->input('frame');
        $fuel = $request->input('fuel');
        $metric = $request->input('metric');
        $mission = $request->input('mission');
        $setElapseTime = $request->has('setelapsetime'); // Checkbox value
        $elapseTime = $request->input('elapsetime');
        $etd = $request->input('etd');
        $etdField = $request->input('etdfeild');
        $eta = $request->input('eta');
        $etaField = $request->input('etafeild');
        $pilotGiveRemark = $request->input('pilotgiveremark');
        $radarSurveillance = $request->has('radarradarsurveillance'); // Checkbox value
        $adcNo = $request->input('adcno');
        $captain = $request->input('captain');
        $copilot = $request->input('copilot');

        // Create a new instance of the PilotRequest model
        $pilotrequest = new PilotRequest();
        $pilotrequest->type = $type;
        $pilotrequest->frameno = $frame;
        $pilotrequest->fuel = $fuel;
        $pilotrequest->metric = $metric;
        $pilotrequest->mission = $mission;
        $pilotrequest->setelapsetime = $setElapseTime;
        $pilotrequest->elapsetime = $elapseTime;
        $pilotrequest->etd = $etd;
        $pilotrequest->etdfeild = $etdField;
        $pilotrequest->eta = $eta;
        $pilotrequest->etafeild = $etaField;
        $pilotrequest->pilotgiveremark = $pilotGiveRemark;
        $pilotrequest->radarradarsurveillance = $radarSurveillance;
        $pilotrequest->adcno = $adcNo;
        $pilotrequest->captain = $captain;
        $pilotrequest->copilot = $copilot;

        // Save the new record to the database
        $pilotrequest->save();

        // Redirect the user back to the form page or a different page
        return redirect()->back()->with('success', 'Request record created successfully.');
    }
}
