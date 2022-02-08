<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');

// });

Route::get('/', 'PagesController@index');

// Route::get('/', function () {
//     return view('pages.index');

// });

Route::get('/about', 'PagesController@about');

// Route::get('/about', function () {
//     return view('pages.about');

// });


Route::get('/services', 'PagesController@services');

// Route::get('services', function (){
//     return view('pages.services');
// });


// Route::get('/hello', function () {
//     // return view('welcome');
//     return 'Hello PERCIIE';
// });


// data back end <----


// <<<<Dynamic Route>>>> variable na id is specific
// Route::get('/users/{id}/{name}', function($id, $name){
//         return 'This is user '.$name.' ang id is '.$id;
//  });

Route::resource('posts', 'PostsController');



Route::get('/create', function () {
    return view('posts.create');
});

// Route::get('/edit', function () {
//     return view('posts.edit');
// });

// Route::get('/exercise', function () {
//     return view('exercise.try');
// });


Auth::routes();

// optional

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\DashboardConttroller::class, 'index'])->name('home');

Route::get('/dashboard', 'DashboardController@index');


// <-- template -->
Route::get('/index', 'UserController@index');

// Route::get('/index', function (){
//     return view('user.index');
// });


// Route::get('/users/{id}/{name}', function ($name,$id){
//     return 'This is user '.$name.' with an id of '.$id;
// });

// Route::get('/example', function () {
//     return view('user.example');
// });

Route::get('/example', 'UserController@example');


// Route::get('/index', function () {
//     return view('color.index');
// });
Route::get('/car', 'CarController@sasakyan');
Route::get('/create', 'CarController@create');
Route::get('/show/{id}', 'CarController@show');
Route::post('/store', 'CarController@store');
// Route::put('/update', 'CarController@edit');



// Route::get('/sasakyan', function () {
//     return view('car.sasakyan');
// });
