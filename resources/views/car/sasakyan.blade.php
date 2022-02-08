@extends('layouts.app')

@section('content')


    <h3>Car List</h3>
    {{-- <a href="/car/create" class="btn btn-primary">Create car</a> --}}
    {{-- <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Name Car</th>
                                <th>Year model</th>

                            </tr>
                        </table> --}}
    <div class="container">

        <table class="table">
            @foreach ($kotse as $car)
                <h3>
                    <li class="list-group-item list-group-item-action list-group-item-dark">

                        <a href="/show/{{ $car->id }}">{{ $car->name }}</a>
                        {{-- <th><a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a></th> --}}


                        {{-- <a href="/show/{{ $car->id }}">{{ $car->name }} </a> --}}

                        <ul class="list-group">
                    </li>

                    </ul>
                    {{-- <tr>
                                  <td>{{$car->id}}</td>
                                  <td>{{$car->name}}</td>
                                  <td>{{$car->year}}</td>
                              </tr> --}}
                </h3>
            @endforeach
        </table>
        {{-- @else
                        <p>
                            You have no post
                        </p>
         @endforelse --}}
    </div>
@endsection
