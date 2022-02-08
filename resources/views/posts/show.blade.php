@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-primary">GO BACK</a>
        <h1>
            {{ $post->title }}
        </h1>
        <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}">

        {{-- <h1>THIS IS SHOW VIEW</h1> --}}
        {{-- <small>Written on {{  $post->created_at }}</small> --}}
        <div>
            {{ $post->body }}
        </div>

        <hr>

        <small>
            Written on {{  $post->created_at }}  by {{ $post->user->name }}
        </small>



@if (!Auth::guest())
    @if (!Auth::user()->id == $post->user_id)
            <hr>
            <a href="/posts/{{ $post->id }}/edit"  class="btn btn-success">
                Edit
            </a>
    {{-- <form action="POST" action="{{  }}"> --}}
        <form method="post" action="{{action('PostsController@destroy',[$post->id])}}">
            <button type="submit" class="btn btn-danger">DELETE</button>
            @csrf
            {{-- {{ method_field('DELETE') }} --}}
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endif
@endif

@endsection



