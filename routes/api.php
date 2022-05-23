<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
Route::get('profiles', 'App\Http\Controllers\ProfileController@index');
Route::get('profiles/{profile}', 'App\Http\Controllers\ProfileController@show');
Route::post('profiles', 'App\Http\Controllers\ProfileController@store');
Route::put('profiles/{profile}', 'App\Http\Controllers\ProfileController@update');
Route::delete('profiles/{profile}', 'App\Http\Controllers\ProfileController@delete');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@registered');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

