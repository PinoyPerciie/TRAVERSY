<?php

namespace App\Http\Controllers;
use App\Models\car;
use App\Models\color;
use DB;




use Illuminate\Http\Request;

class CarController extends Controller
{
    // public function sasakyan($id){



    public function sasakyan(){

        $kotse = car::all();


        $data = array (

            'kotse'  => $kotse,
        );

        return view('car.sasakyan')->with($data);

        // $car_id = auth()->id;
        // $car = car::find($car_id);
        // return view('car.sasakyan')->with('car', $car->Color);


    }

    public function create () {
        return view('car.create');
    }





    public function show($id){




        $kotse = car::find($id);
        $kulay = Color::find($id);
        // $kulay = Color::all();

        // $kulay = Color::orderBy('id', 'asc')
        // ->take(2)
        // // ->orderBy('id')
        // ->get();



        // $kulay = Color::where('id',)
        // ->take(2)
        // ->orderBy('id')
        // ->get();
        $data = array (


            'kotse'  => $kotse,
            'kulay' => $kulay,
        );

        return view('car.show')->with($data);

    }


    public function store(Request $request)
    {
       $this->validate($request, [
        //  'id' => 'required',
         'car-name' => 'required',
         'year-model' => 'required',

        ]);

        //Create Color
        $car = new car;
        // $car->id = $request->input('id');
        $car->name = $request->input('car-name');
        $car->year = $request->input('year-model');
        $car->save();
        // return 123;

    return redirect('/car')->with('Success', 'Car created');

    }


    public function edit($id)
    {
        $kotse = car::find($id);
        return view('car.edit')->with('car', $kotse);
    }
}
