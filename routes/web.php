<?php

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

use App\Http\Controllers\GuestController;

Route::get('hotel','HotelbookappController@index');

Route::get('hotel/home', 'GuestController@index');

Route::get('hotel/guest', 'GuestController@add');
Route::post('hotel/guest', 'GuestController@create');