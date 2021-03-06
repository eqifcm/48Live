<?php

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

//Route::middleware('auth:api')->get('/user', function(Request $request){
//	return $request->user();
//});

Route::get('/live', 'LiveController@list');

Route::get('/live/{liveId}', 'LiveController@show');

Route::get('/barrage', 'LiveController@barrage');

Route::get('/token', 'LiveController@token');

Route::get('/info', 'GroupInfoController@all');