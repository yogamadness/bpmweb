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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
//API PDM
Route::get('/urlGetEmployee', 'ApiController@UrlGetEmployee');
Route::get('/urlEmpWorkStatus', 'ApiController@UrlEmpWorkStatus');
Route::get('/getEmpWorkStatus', 'ApiController@GetEmpWorkStatus');
Route::get('/GetEmpByNIK', 'ApiController@GetEmpByNIK');
Route::get('/GetEmpAutoComplete', 'ApiController@GetEmpAutoComplete');
Route::get('/GetEmpAutoCompletePemanen', 'ApiController@GetEmpAutoCompletePemanen');
Route::get('/GetEmpAutoCompleteNonPemanen', 'ApiController@GetEmpAutoCompleteNonPemanen');
Route::get('/GetEmpProductivity', 'ApiController@GetEmpProductivity');
Route::get('/getOptCompany', 'ApiController@GetOptCompany');
Route::get('/getOptBusinessArea', 'ApiController@GetOptBusinessArea');
Route::get('/getOptAfdeling', 'ApiController@GetOptAfdeling');
Route::get('/getOptJobCode', 'ApiController@GetOptJobCode');
Route::get('/getOptJobType', 'ApiController@GetOptJobType');
Route::get('/getEmpSearch', 'ApiController@GetEmpSearch');
