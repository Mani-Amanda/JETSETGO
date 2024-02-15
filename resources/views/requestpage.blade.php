<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ ucfirst($type) }} - {{ $frame }} Request Flight</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ ucfirst($type) }} - {{ $frame }} Request Flight
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form method="POST" action="{{ route('create.request') }}">
                            @csrf
                            <input type="hidden" name="type" value="{{ $type }}">
                            <input type="hidden" name="frame" value="{{ $frame }}">
                            <div class="form-group">
                                <label for="fuel">Fuel:</label>
                                <input type="number" class="form-control" id="fuel" name="fuel" placeholder="Enter fuel">
                            </div>
                            <div class="form-group">
                                <label for="metric">Metric:</label>
                                <select class="form-control" id="metric" name="metric">
                                    <option value="kg">kg</option>
                                    <option value="pound">pound</option>
                                    <option value="liters">liters</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mission">Mission:</label>
                                <input type="text" class="form-control" id="mission" name="mission" placeholder="Enter mission">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="setelapsetime" name="setelapsetime">
                                <label class="form-check-label" for="setelapsetime">Set Elapse Time</label>
                            </div>
                            <div class="form-group">
                                <label for="elapsetime">Elapse Time:</label>
                                <input type="time" class="form-control" id="elapsetime" name="elapsetime">
                            </div>
                            <div class="form-group">
                                <label for="etd">ETD:</label>
                                <input type="time" class="form-control" id="etd" name="etd">
                            </div>
                            <div class="form-group">
                                <label for="etdfeild">ETD Field:</label>
                                <input type="text" class="form-control" id="etdfeild" name="etdfeild" placeholder="Enter ETD field">
                            </div>
                            <div class="form-group">
                                <label for="eta">ETA:</label>
                                <input type="time" class="form-control" id="eta" name="eta">
                            </div>
                            <div class="form-group">
                                <label for="etafeild">ETA Field:</label>
                                <input type="text" class="form-control" id="etafeild" name="etafeild" placeholder="Enter ETA field">
                            </div>
                            <div class="form-group">
                                <label for="pilotgiveremark">Remark:</label>
                                <input type="text" class="form-control" id="pilotgiveremark" name="pilotgiveremark" placeholder="Enter pilot remark">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="radarradarsurveillance" name="radarradarsurveillance">
                                <label class="form-check-label" for="radarradarsurveillance">Radar Surveillance</label>
                            </div>
                            <div class="form-group">
                                <label for="adcno">ADC No:</label>
                                <input type="text" class="form-control" id="adcno" name="adcno" placeholder="Enter ADC No">
                            </div>
                            <div class="form-group">
                                <label for="captain">Captain:</label>
                                <input type="text" class="form-control" id="captain" name="captain" placeholder="Enter captain name">
                            </div>
                            <div class="form-group">
                                <label for="copilot">Co-Pilot:</label>
                                <input type="text" class="form-control" id="copilot" name="copilot" placeholder="Enter co-pilot name">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Request</button>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </body>
    </html>
</x-app-layout>

