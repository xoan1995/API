<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinceController;

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
Route::prefix('/provinces')->group(function(){
    Route::get('/', 'App\Http\Controllers\ProvinceController@getAllProvinces');
    Route::get('{id}', 'Api\ProvinceController@getProvince');
    Route::post('create', 'Api\Http\Controllers\ProvinceController@createProvince');
    Route::put('{id}/update', 'App\Http\Controllers\ProvinceController@updateProvince');
    Route::delete('{id}/delete','App\Http\Controllers\ProvinceController@deleteBook');
});
Route::get('provinces', 'App\Http\Controllers\ProvinceController@getAllProvinces');