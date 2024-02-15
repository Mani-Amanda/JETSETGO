<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Engineer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                {{-- Iterate over aircrafts and display their details --}}
                    <h3>Aircrafts List</h3>
                    <ul>
                        @php
                            $displayedCombinations = [];
                            @endphp

                            @foreach ($aircrafts as $aircraft)
                            @php
                                $combination = $aircraft->type . '-' . $aircraft->frameno;
                            @endphp

                        @if (!in_array($combination, $displayedCombinations))
                            <li>{{ $aircraft->type }} - {{ $aircraft->frameno }}</li>
                            {{-- Display other aircraft details as needed --}}
                            @php
                                $displayedCombinations[] = $combination;
                            @endphp
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>