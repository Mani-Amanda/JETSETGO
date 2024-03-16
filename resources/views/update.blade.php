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
                {{ ucfirst($type) }} - {{ $frame }} Update Flight
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('update.aircraft', ['type' => $type, 'frame' => $frame]) }}">
                            @csrf
                            <input type="hidden" name="type" value="{{ $type }}">
                            <input type="hidden" name="frame" value="{{ $frame }}">
                            <div class="form-group">
                                <label for="serviceability">Serviceability:</label>
                                <select class="form-control" id="serviceability" name="serviceability">
                                    <option value="FMC">FMC</option>
                                    <option value="PMC">PMC</option>
                                    <option value="NMCE">NMCE</option>
                                    <option value="NMCL">NMCL</option>
                                    <option value="NMCB">NMCB</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="endurance">Endurance:</label>
                                <input type="time" class="form-control" id="endurance" name="endurance">
                            </div>
                            <div class="form-group">
                                <label for="engineergiveremark">Remark:</label>
                                <input type="text" class="form-control" id="engineergiveremark" name="engineergiveremark" placeholder="Enter engineer remark">
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
