<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Pilot Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    {{-- Display filtered aircrafts --}}
    

                    {{-- Dropdown menu to select aircraft type --}}
                    <div class="row justify-content-center mb-4">
                    <div class="p-6 text-gray-900">
    {{-- Centered title --}}
    <div class="row justify-content-center mb-4">
        <div class="col-auto">
            <h3>Select Aircrafts Type</h3>
        </div>
        <div class="col-auto">
            <form id="filterForm" action="{{ route('pilot.dashboard') }}" method="GET">
                <div class="input-group">
                    <select id="typeSelect" name="type" class="form-select" aria-label="Select Type">
                        <option value="">Select Type</option>
                        @foreach ($types as $type)
                            <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

                    
                    {{-- Display MC and NMC Lists in Two Columns --}}
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="text-center">
                                <h3>MC (Mission Capable)</h3>
                                <ul>
                                    @foreach ($aircrafts as $aircraft)
                                        @if (($aircraft->serviceability == 'FMC' && $aircraft->type == request('type')) || ($aircraft->serviceability == 'PMC' && $aircraft->type == request('type')))
                                        <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title" align='middle'><b>{{ $aircraft->type }} - {{ $aircraft->frameno }}</b></h5>
                                @if ($aircraft->type == 'Y-12')
                                    <img src="{{ asset('assets/img/Y12.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                    <a class="btn btn-primary" href="{{ route('request.flight', ['type' => $aircraft->type, 'frame' => $aircraft->frameno]) }}" role="button">Request Aircraft</a>
                                @elseif ($aircraft->type == 'B-200')
                                    <img src="{{ asset('assets/img/B200.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                    <a class="btn btn-primary" href="{{ route('request.flight', ['type' => $aircraft->type, 'frame' => $aircraft->frameno]) }}" role="button">Request Aircraft</a>
                                @elseif ($aircraft->type == 'MA-600')
                                    <img src="{{ asset('assets/img/MA600.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                    <a class="btn btn-primary" href="{{ route('request.flight', ['type' => $aircraft->type, 'frame' => $aircraft->frameno]) }}" role="button">Request Aircraft</a>
                                @else
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                                        @endif
                                    @endforeach
                                </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="text-center">
                                <h3>NMC (Non Mission Capable)</h3>
                                <ul>
                                    @foreach ($aircrafts as $aircraft)
                                        @if (($aircraft->serviceability != 'FMC' &&$aircraft->type == request('type')) && ($aircraft->serviceability != 'PMC'&& $aircraft->type == request('type')))
                                            <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title" align='middle'><b>{{ $aircraft->type }} - {{ $aircraft->frameno }}</b></h5>
                                @if ($aircraft->type == 'Y-12')
                                    <img src="{{ asset('assets/img/Y12.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                @elseif ($aircraft->type == 'B-200')
                                    <img src="{{ asset('assets/img/B200.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                @elseif ($aircraft->type == 'MA-600')
                                    <img src="{{ asset('assets/img/MA600.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                @else
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                                        @endif
                                    @endforeach
                                </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                    
                    <!-- Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        // Add event listener to the dropdown to submit the form when the value changes
                        document.getElementById('typeSelect').addEventListener('change', function() {
                            document.getElementById('filterForm').submit();
                        });
                    </script>
                </div>
            </div>
        </div>
        <style>
        

        .aircraft-image {
            width: 100%;
            height: 200px;
        }
    </style>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </x-app-layout>
</html>
