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
//     return view('home');
// });


Auth::routes();

//Home route
Route::get('/', 'HomeController@index')->name('home');

//Calls Route

// Route::get('/call','CallController@index')->name('call.index');
// Route::post('/call','CallController@store')->name('call.store');
// Route::get('/call/create','CallController@create')->name('call.create');

Route::resources([
    'call' => 'CallController'
]);



