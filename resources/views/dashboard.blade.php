@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3>
                        <div class="card-header">{{ __('Dashboard') }}</div>
                    </h3>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}

                        <h3>Blog post</h3>
                        <a href="/posts/create" class="btn btn-primary">Create post</a>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{ $post->title }}</th>
                                    <th><a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a></th>
                                    <form method="post" action="{{ action('PostsController@destroy', [$post->id]) }}">
                                        <th><button type="submit" class="btn btn-danger">DELETE</button></th>
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </tr>
                            @endforeach
                        </table>
                        {{-- @else
                        <p>You have no post</p>
                    @endforelse --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
