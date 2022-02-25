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


Route::get('/', 'OwnerController@index');

// Route::get('/index', 'AnimalController@index');


// Route::get('/movies/create', 'MovieController@create');   // Route for create method

// Route::get('/movies/{id?}', 'MovieController@show');     // Route for  show method

// Route::post('/movies/store', 'MovieController@store');   // Route for store method

// Route::delete(
//     '/movies/{id}',
//     'MovieController@delete'
// );
