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
Route::prefix('/provinces')->group(function () {
    Route::get('/', 'App\Http\Controllers\ProvinceController@getAllProvinces')->name('api-get-provinces');
    Route::get('{id}', 'App\Http\Controllers\ProvinceController@getProvince')->name('api-get-province');
    Route::post('create', 'App\Http\Controllers\ProvinceController@createProvince')->name('api-create-province');
    Route::put('{id}/update', 'App\Http\Controllers\ProvinceController@updateProvince')->name('api-update-province');
    Route::delete('{id}/delete', 'App\Http\Controllers\ProvinceController@destroy')->name('api-delete-province');
});

Route::prefix('/districts')->group(function () {
    Route::get('/', 'App\Http\Controllers\DistrictController@getAllDistricts');
    Route::get('{id}', 'App\Http\Controllers\DistrictController@getDistrict');
    Route::post('create', 'App\Http\Controllers\DistrictController@createDistrict');
    Route::put('{id}/update', 'App\Http\Controllers\DistrictController@updateDistrict');
    Route::delete('{id}/delete', 'App\Http\Controllers\DistrictController@deleteDistrict');
});

Route::prefix('/wards')->group(function () {
    Route::get('/', 'App\Http\Controllers\WardController@getAllWards');
    Route::get('{id}', 'App\Http\Controllers\WardController@getWard');
    Route::post('create', 'App\Http\Controllers\WardController@createWard');
    Route::put('{id}/update', 'App\Http\Controllers\WardController@updateWard');
    Route::delete('{id}/delete', 'App\Http\Controllers\WardController@deleteWard');
});

Route::prefix('/orgBisinessInfors')->group(function () {
    Route::get('/', 'App\Http\Controllers\OrgBisinessInforController@getAllOrgBisinessInfor');
    Route::get('{id}', 'App\Http\Controllers\OrgBisinessInforController@getOrgBisinessInfor');
    Route::post('create', 'App\Http\Controllers\OrgBisinessInforController@createOrgBisinessInfor');
    Route::put('{id}/update', 'App\Http\Controllers\OrgBisinessInforController@updateOrgBisinessInfor');
    Route::delete('{id}/delete', 'App\Http\Controllers\OrgBisinessInforController@deleteOrgBisinessInfor');
});

Route::prefix('/orgBasicInfors')->group(function () {
    Route::get('/', 'App\Http\Controllers\OrgBasicInforController@getAllOrgBasicInfors');
    Route::get('{id}', 'App\Http\Controllers\OrgBasicInforController@getOrgBasicInfor');
    Route::post('create', 'App\Http\Controllers\OrgBasicInforController@createOrgBasicInfor');
    Route::put('{id}/update', 'App\Http\Controllers\OrgBasicInforController@updateOrgBasicInfor');
    Route::delete('{id}/delete', 'App\Http\Controllers\OrgBasicInforController@deleteOrgBasicInfor');
});

Route::prefix('/orgContacts')->group(function () {
    Route::get('/', 'App\Http\Controllers\OrgContactController@getAllOrgContacts');
    Route::get('{id}', 'App\Http\Controllers\OrgContactController@getOrgContact');
    Route::post('create', 'App\Http\Controllers\OrgContactController@createOrgContact');
    Route::put('{id}/update', 'App\Http\Controllers\OrgContactController@updateOrgContact');
    Route::delete('{id}/delete', 'App\Http\Controllers\OrgContactController@deleteOrgContact');
});

Route::prefix('/orgDetails')->group(function () {
    Route::get('/', 'App\Http\Controllers\OrgDetailController@getAllOrgDetails');
    Route::get('{id}', 'App\Http\Controllers\OrgDetailController@getOrgDetail');
    Route::post('create', 'App\Http\Controllers\OrgDetailController@createOrgDetail');
    Route::put('{id}/update', 'App\Http\Controllers\OrgDetailController@updateOrgDetail');
    Route::delete('{id}/delete', 'App\Http\Controllers\OrgDetailController@deleteOrgDetail');
});

Route::prefix('/orgMajors')->group(function () {
    Route::get('/', 'App\Http\Controllers\OrgMajorsController@getAllOrgMajors');
    Route::get('{id}', 'App\Http\Controllers\OrgMajorsController@getOrgMajors');
    Route::post('create', 'App\Http\Controllers\OrgMajorsController@createOrgMajors');
    Route::put('{id}/update', 'App\Http\Controllers\OrgMajorsController@updateOrgMajors');
    Route::delete('{id}/delete', 'App\Http\Controllers\OrgMajorsController@deleteOrgMajors');
});

Route::prefix('/orgMedias')->group(function () {
    Route::get('/', 'App\Http\Controllers\OrgMediaController@getAllOrgMedias');
    Route::get('{id}', 'App\Http\Controllers\OrgMediaController@getOrgMedia');
    Route::post('create', 'App\Http\Controllers\OrgMediaController@createOrgMedia');
    Route::put('{id}/update', 'App\Http\Controllers\OrgMediaController@updateOrgMedia');
    Route::delete('{id}/delete', 'App\Http\Controllers\OrgMediaController@deleteOrgMedia');
});

Route::prefix('/orgNews')->group(function () {
    Route::get('/', 'App\Http\Controllers\OrgNewsController@getAllOrgNews');
    Route::get('{id}', 'App\Http\Controllers\OrgNewsController@getOrgNews');
    Route::post('create', 'App\Http\Controllers\OrgNewsController@createOrgNews');
    Route::put('{id}/update', 'App\Http\Controllers\OrgNewsController@updateOrgNews');
    Route::delete('{id}/delete', 'App\Http\Controllers\OrgNewsController@deleteOrgNews');
});
