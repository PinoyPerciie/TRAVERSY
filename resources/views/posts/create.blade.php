@extends('layouts.app')

@section('content')

    <h1>CREATE POST</h1>
    {{-- <h1>THIS IS CREATE VIEW </h1> --}}
    <!DOCTYPE html>
    <html lang="en">

    <head>

    <body>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <title>Document</title> --}}



        {{-- MALI --}}
        {{-- <form action="CREATE POST"> --}}

        {{-- TAMA --}}
        <form method="POST" action="{{ action('PostsController@store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h2>Title</h2>
                <input type="title" class="form-control" id="title" placeholder="Title" name="title">
            </div>

            <div class="form-group">
                <h3>Body</h3>
                <textarea input type="body" class="form-control" id="body" placeholder="Body" rows="15" cols="150"name="body"></textarea><br>
            </div>

            <div class="form-group">

                                 {{-- FOR ME --}}
                {{-- <input type="file" id="img" name="img" accept="image/*"> --}}
                                 {{-- TEST 2 --}}
                {{-- <input type="file" id="cover_image" name="cover_image" accept="multipart/form-data"> --}}
                                 {{-- TEST 3 --}}
                {{-- <input type="file" id="cover_image" name="cover_image" accept="cover_image-form-data"> --}}
                           {{-- FINAL TEST SUCCESS --}}
                <input type="file" id="cover_image" name="cover_image" accept="image/*">

            </div>

            {{-- MALI --}}
            {{-- <input type="submit" name="submit" value="Submit" class=" btn btn-primary"> --}}

            {{-- TAMA --}}
            <button type="submit" class=" btn btn-primary">Submit</button>
        </form>
    </body>
    </head>

    </html>



@endsection
