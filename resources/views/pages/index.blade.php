@extends('layouts.app')

@section('content')

    {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'TRAVERSY')}}</title>
</head>
<body> --}}

    </body>

    </html>
    {{-- <h1>Welcome To Laravel</h1> --}}
    {{-- <h1>{{ $title }}</h1>
            <p>This is the Laravel application from the "LARAVEL TUTORIAL PROJECT"</p> --}}
    <br>
    <div class="jumbotron text-center">
        {{-- <?php echo $title; ?> --}}
        {{-- {{ $title }} --}}

        <h1>
            TRAVERSY LARAVEL TUTORIAL PROJECT
        </h1>
        <p>
            This is the Laravel application from the "LARAVEL TUTORIAL PROJECT"
        </p>
        {{-- <a class="btn btn-primary btn-lg" href="/login" role="">Login</a> --}}
        <button type="button" class="btn btn-primary btn-sm" class="text-center" href="/login" role="">Login</button>
        <button type="button" class="btn btn-primary btn-sm" class="text-center" href="/register" role="">Register</button>
        {{-- <a class="btn btn-primary btn-lg" href="/register" role="">Register</a></div> --}}
    </div>
@endsection
