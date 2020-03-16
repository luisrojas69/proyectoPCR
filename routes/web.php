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

//Home
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Grupo de Rutas con el Middleware Auth ( para forzar el inicio d Sesion)
Route::middleware(['auth'])->group(function () {
	//Obtener Vehiculos
	Route::get('/get-vehicles', 'VehicleController@getVehicles');

	//Vehiculos
	Route::resource('administration/vehicle','VehicleController')->except(['create']);

});//Fin Grupo de Rutas con el Middleware Auth ( para forzar el inicio d Sesion)
