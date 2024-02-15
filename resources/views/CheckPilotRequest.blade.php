<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __('Engineer Dashboard') }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @php
                        $pilotRequests = App\Models\PilotRequest::all()->groupBy('type');
                    @endphp

                    @if($pilotRequests->isEmpty())
                        <p>No pilot requests found.</p>
                    @else
                        @foreach($pilotRequests as $type => $requests)
                            <h3>{{ $type }}</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Frame No</th>
                                        <th>Fuel</th>
                                        <th>Metric</th>
                                        <th>Mission</th>
                                        <th>Elapse Time</th>
                                        <th>ETD</th>
                                        <th>ETD Field</th>
                                        <th>ETA</th>
                                        <th>ETA Field</th>
                                        <th>Pilot Remark</th>
                                        <th>Radar Surveillance</th>
                                        <th>ADC No</th>
                                        <th>Captain</th>
                                        <th>Co-Pilot</th>
                                        <!-- Add more headers as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($requests as $request)
                                        <tr>
                                            <td>{{ $request->frameno }}</td>
                                            <td>{{ $request->fuel }}</td>
                                            <td>{{ $request->metric }}</td>
                                            <td>{{ $request->mission }}</td>
                                            <td>{{ $request->elapsetime }}</td>
                                            <td>{{ $request->etd }}</td>
                                            <td>{{ $request->etdfeild }}</td>
                                            <td>{{ $request->eta }}</td>
                                            <td>{{ $request->etafeild }}</td>
                                            <td>{{ $request->pilotgiveremark }}</td>
                                            <td>{{ $request->radarradarsurveillance ? 'Yes' : 'No' }}</td>
                                            <td>{{ $request->adcno }}</td>
                                            <td>{{ $request->captain }}</td>
                                            <td>{{ $request->copilot }}</td>
                                            <!-- Add more columns as needed -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
