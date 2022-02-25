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

Route::get('/', function () {
    return view('index/index');
});    // HOME PAGE

// SEARCH PAGES
Route::get('/owners', 'Controller@listOwner'); // post method

Route::get('/animals', 'Controller@listAnimal');

Route::get('/animals/search', 'AnimalController@searchAnimal');



// DETAILS PAGES
Route::get('/owners/detail', 'Controller@detailOwner');

Route::get('/animals/detail/{id}', 'Controller@detailAnimal');






// Route::post('/owners/create', 'OwnerController@index');

// Route::post('/animals/create', 'AnimalController@index');


// Route::get('/movies/create', 'MovieController@create');   // Route for create method

// Route::get('/movies/{id?}', 'MovieController@show');     // Route for  show method

// Route::post('/movies/store', 'MovieController@store');   // Route for store method
