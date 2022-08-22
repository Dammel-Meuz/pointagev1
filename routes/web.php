<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PointageController;
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

Route::get('/', function () {
    return view('welcome');
});
Route ::resource ( '/pointage' , 'App\Http\Controllers\PointageController' );
Route ::post ( '/pointage' , 'App\Http\Controllers\PointageController@store' );
Route :: get ( '/pointage' , 'App\Http\Controllers\PointageController@index' );
Route ::post ( '/rapport' , 'App\Http\Controllers\RapportController@store' );
Route :: get ( '/rapport' , 'App\Http\Controllers\RapportController@index' );