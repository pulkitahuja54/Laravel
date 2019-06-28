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
Route::get('/events', 'EventController@apiindex');
Route::post('/events', 'EventController@apistore');
Route::get('/events/{event}/edit', 'EventController@apiedit');
Route::patch('/events/{event}', 'EventController@apiupdate');
Route::delete('/events/{event}', 'EventController@apidestroy');