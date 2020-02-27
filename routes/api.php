<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
**Routes RESTful service:
**Route::get($uri, $callback);
**Route::post($uri, $callback);
**Route::put($uri, $callback);
**Route::delete($uri, $callback);
**
*/

Route::get('tickets', 'TicketsController@index'); #recupera todos los tickets
Route::get('tickets/{ticket}', 'TicketsController@show'); #recupera un ticket que coincida con el id
Route::post('tickets','TicketsController@store'); #crea un nuevo ticket y lo inserta en la base de datos
Route::put('tickets/{ticket}','TicketsController@update'); #actualiza un ticket existente que coincida con el id
Route::delete('tickets/{ticket}', 'TicketsController@delete'); #elimina un ticket con el id proporcionado
