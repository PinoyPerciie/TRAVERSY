@extends('layouts.app')

@section('content')

    <h1>CREATE CAR</h1>
    {{-- <h1>THIS IS CREATE VIEW </h1> --}}

        {{-- <title>Document</title> --}}

        {{-- MALI --}}
        {{-- <form action="CREATE POST"> --}}

        {{-- TAMA --}}
        <form method="POST" action="{{ action('CarController@store') }}">
            @csrf
            <div class="form-group">
                 <h3>
                     Car name
                 </h3>
               <input type="name car" class="form-control" id="car-name" placeholder="Car name" name="car-name">
            </div>
                 <h3>
                     Year model
                 </h3>
            <div class="form-group">
               <input type="year model" class="form-control" id="year-model" placeholder="Year model" name="year-model">
            </div>

            <button type="submit" class=" btn btn-primary">Submit</button>
        </form>
@endsection
