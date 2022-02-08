<?php

namespace App\Http\Controllers;
use App\Models\car;
use App\Models\Drinks;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){
        $title = 'PERCIVAL';
        return view('user.index')->with('title', $title);
    }


    // public function index () {
    //     return view('user.index');
    // }

    public function example (){
        // $title = 'PERS';
        // $body = 'THIS PERCIIE';
        // return view('user.example')->with('title', $title, $body);

        // $kotse = car::find(1);
        // $kotse = car::all();
        $drinking = Drinks::all();
        // $drinking = Drinks::find();


        // // $drinking = Drinks::orderBy('id',)
        // // $drinking = Drinks::orderBy('name', 'desc')
        // ->get();

        $drinking = Drinks::where('id', '2')
        // $drinking = Drinks::orderBy('id', 'asc')
        // ->take(2)
        ->orderBy('id')
        ->get();

        $data = array (
            // 'title' => 'PERS',
            // 'body' => 'THIS PERCIIE',
            // 'message' => 'THANKS BRO',
            // 'kotse'  => $kotse,
            'drinking'  => $drinking,


        );

     // $drinking => "WATER"

        return view('user.example')->with($data);


    }
}



