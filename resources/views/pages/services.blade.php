@extends('layouts.app')

@section('content')
    {{-- <h1>SERVICES</h1>
            <p>This is my Servicing</p> --}}

    <h1>{{ $title }}</h1>
    @if (count($service) > 0)
        <ul class="list-group">
            @foreach ($service as $service)
                <li class="list-group-item list-group-item-action list-group-item-dark">{{ $service }}</li>
            @endforeach
        </ul>
    @endif



    {{-- ito yung kay traversy ganyang form --}}
    {{-- <h1>{{ $title }}</h1>
        @if (count($services) > 0)
         <ul>
             @foreach ($services as $service)
                <li>{{ $service }}</li>
             @endforeach
         </ul>
        @endif --}}
@endsection
