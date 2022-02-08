@extends('layouts.app')

@section('content')

    <h1>Car Post</h1>
    <a href="/create" class="btn btn-primary">Create car</a>
    <table class="table table-striped">
        <tr>
            <th>Car name</th>
            <th>Year model </th>
            <th>Car color</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>



        <tr>

            <th>
                <h2>
                    {{ $kotse->name }}
                </h2>
            </th>

            <th>

                <h2>
                    {{ $kotse->year }}
                </h2>
            </th>

            <th>

                <h2>
                    {{ $kulay->name }}
                </h2>
            </th>
            <th><a href="/edit" class="btn btn-success">Edit</a></th>
            <th><button type="submit" class="btn btn-danger">DELETE</button></th>
            @csrf
            <input type="hidden" name="_method" value="DELETE">
        </tr>


        {{-- @foreach ($kulay as $Color)

        <li>
          {{ $Color->name }}
        </li>

    @endforeach --}}



    @endsection
