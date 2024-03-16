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
            {{ __('Engineer Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center"> <!-- Center the grid -->
            @php
                $displayedCombinations = [];
            @endphp

            @foreach ($aircrafts as $aircraft)
                @php
                    $combination = $aircraft->type . '-' . $aircraft->frameno;
                @endphp

                @if (!in_array($combination, $displayedCombinations))
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title" align='middle'><b>{{ $aircraft->type }} - {{ $aircraft->frameno }}</b></h5>
                                @if ($aircraft->type == 'Y-12')
                                    <img src="{{ asset('assets/img/Y12.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                    <a class="btn btn-primary" href="{{ route('update.flight', ['type' => $aircraft->type, 'frame' => $aircraft->frameno]) }}" role="button">Update Aircraft</a>
                                @elseif ($aircraft->type == 'B-200')
                                    <img src="{{ asset('assets/img/B200.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                    <a class="btn btn-primary" href="{{ route('update.flight', ['type' => $aircraft->type, 'frame' => $aircraft->frameno]) }}" role="button">Update Aircraft</a>
                                @elseif ($aircraft->type == 'MA-600')
                                    <img src="{{ asset('assets/img/MA600.jpg') }}" alt="Aircraft Image" class="aircraft-image">
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                    <a class="btn btn-primary" href="{{ route('update.flight', ['type' => $aircraft->type, 'frame' => $aircraft->frameno]) }}" role="button">Update Aircraft</a>
                                @else
                                    <p class="card-text">Any additional details about the aircraft can go here.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @php
                        $displayedCombinations[] = $combination;
                    @endphp
                @endif
            @endforeach
        </div>

    <style>
        

        .aircraft-image {
            width: 100%;
            height: 200px;
        }
    </style>
</x-app-layout>
