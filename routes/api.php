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

Route::get('v1/offres-emplois', 'Api\OffreEmploiController@getListeOffreEmploi')->name('liste-offres-emplois');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
