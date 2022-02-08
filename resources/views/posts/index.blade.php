@extends('layouts.app')

@section('content')

    <h1>POSTS</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}">

                        {{-- <div class="col-md-4 col-sm-4"> --}}
                        <div class="list-group-item list-group-item-action list-group-item-dark">
                            <h3>
                                <a href="/posts/{{ $post->id }}"> {{ $post->title }}</a>
                                {{-- <a href="/posts/">{{ $post->id }} {{ $post->title }}</a> --}}
                            </h3>
                            <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                        </div>
                    </div>
                </div>
                {{-- <div class="list-group-item list-group-item-action list-group-item-dark"> --}}
                {{-- <img style="width:100%"  src="/storage/cover_image/{{ $post->cover_image }}"> --}}
                {{-- <img src="/storage/cover_images/{{ $post->cover_image }}" style="width:50%"> --}}

                {{-- </div> --}}
                {{-- <ul class="list-group"> --}}


            </div>
        @endforeach
        {{-- {{ $posts->links() }} --}}
    @else
        <p>
            No posts found
        </p>
    @endif
@endsection
