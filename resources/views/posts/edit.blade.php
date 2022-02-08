@extends('layouts.app')

@section('content')

    <h1>EDIT POST</h1>
    {{-- <h1>THIS IS EDIT VIEW</h1> --}}


    <form method="post" action="{{ action('PostsController@update', [$post->id]) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group">
            <h2>Title</h2>
            <input type="title" class="form-control" id="title" placeholder="Title" name="title"
                value="{{ $post->title }}">
        </div>


        <div class="form-group">
            <h3>Body</h3>
            {{-- <textarea class="form-control" id="body" placeholder="Body" rows="15" cols="150" name="body">
                {{ $post->body }}
            </textarea> --}}
            <textarea class="form-control" id="body" placeholder="Body" rows="15"
                name="body">{{ $post->body }}</textarea>
        </div>

        <div class="form-group">


            <input type="file" id="cover_image" name="cover_image" accept="image/*">

        </div>


        <button type="submit" class=" btn btn-primary">Submit</button>

    </form>


@endsection




{{-- <h1>EDIT POST</h1>
<!DOCTYPE html>
<html lang="en">
<head>
<body>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
{{-- <title>Document</title> --}}



{{-- <form method="post" action="{{ action('PostsController@store') }}">
    @csrf
    <div class="form-group">
    <h2>Title</h2>
    <input type="title" class="form-control" id="title" placeholder="Title" name="title"  >
    </div>
    <div class="form-group">

    <h3>Body</h3>
    <textarea input type="body" class="form-control"  id="body" placeholder="Body" rows="15" cols="150" name="body">
    </textarea><br>
    </div>

    <button type="submit" class=" btn btn-primary">Submit</button>

</form>
</body>
</head>
</html> --}}
