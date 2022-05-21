<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Profile;
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
Route::get('profiles', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Profile::all();
});

Route::get('profiles/{id}', function($id) {
    return Profile::find($id);
});

Route::post('profiles', function(Request $request) {
    return Profile::create($request->all);
});

Route::put('profiles/{id}', function(Request $request, $id) {
    $article = Profile::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('profiles/{id}', function($id) {
    Profile::find($id)->delete();

    return 204;
});
Route::get('profiles', 'profilesController@index');
Route::get('profiles/{profiles}', 'profilesController@show');
Route::post('profiles', 'profilesController@store');
Route::put('profiles/{profiles}', 'profilesController@update');
Route::delete('profiles/{profiles}', 'profilesController@delete');
Route::post('register', 'Auth\RegisterController@register');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

