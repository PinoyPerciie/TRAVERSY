@extends('layouts.app')
@section('content')

    {{-- <h1>{{ $title }}</h1>
 <h2>{{ $body }}</h2>
 <p>{{ $message }}</p> --}}

    {{-- <h1>{{ $kotse}}</h1> --}}

    {{-- <div class="container">

    <table class="table">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME CAR</th>
                    <th>YEAR MODEL</th>
                </tr>
       </thead>

    @foreach ($kotse as $car)
      <tbody>
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->name}}</td>
                <td>{{$car->year}}</td>
            </tr>
      </tbody>
 @endforeach
</table>
</div>
</html> --}}




    <br>
    <div class="container">

        <table class="table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>DRINKS</th>
                </tr>
            </thead>


            @foreach ($drinking as $Drinks)
                <tbody>
                    <tr>
                        <td>{{ $Drinks->id }}</td>
                        <td>{{ $Drinks->name }}</td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>

    </html>

@endsection
