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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row justify-content-center mb-4">
                    <div class="col-auto">
                        <h3>Aircrafts List</h3>
                    </div>
                </div>
                <div class="row">
                    @php
                        $displayedCombinations = [];
                    @endphp

                    @foreach ($aircrafts as $aircraft)
                        @php
                            $combination = $aircraft->type . '-' . $aircraft->frameno;
                        @endphp

                        @if (!in_array($combination, $displayedCombinations))
                            <div class="col-md-4">
                                <div class="text-center">
                                    <ul>
                                        <li><a href="{{ route('update.flight', ['type' => $aircraft->type, 'frame' => $aircraft->frameno]) }}">{{ $aircraft->type }} - {{ $aircraft->frameno }}</li>
                                        {{-- Display other aircraft details as needed --}}
                                    </ul>
                                </div>
                            </div>
                            @php
                                $displayedCombinations[] = $combination;
                            @endphp
                        @endif
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
