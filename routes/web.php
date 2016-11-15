<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/beranda', function(){
	return view('layouts-master/master');
});

Route::get('/example', 'ExampleController@treem');

Route::get('/home', 'HomeController@index');

Route::get('/loginn', 'AuthController@index');
Route::post('/getlogin','AuthController@getlogin');
Route::get('/logout', 'AuthController@logout');
Route::post('/reload', 'AuthController@reload');

//USER
Route::get('/user', 'UserController@index');
Route::get('/user/getdata', 'UserController@datatable');
Route::get('/user/{id}','UserController@getedit');
Route::post('/user/save', 'UserController@save');
Route::post('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@delete');

//Employee routes

Route::get('/employee', 'EmployeeController@index');
Route::get('/employee/getdata', 'EmployeeController@datatable');
Route::get('/employee/{ID}','EmployeeController@getedit');
Route::post('/employee/save', 'EmployeeController@save');
Route::post('/employee/{ID}', 'EmployeeController@update');
Route::delete('/employee/{ID}', 'EmployeeController@delete');

//FPTK
// Route::get('/fptk', 'FptkController@index');
Route::post('/fptk/save', 'FptkController@save');

Route::get('/fptk_common', function(){
	return view('master-content/fptk_common');
});
Route::get('/fptk_common_bawah', function(){
	return view('master-content/fptk_common_bawah');
});
Route::post('/fptk', function(){
	$tipe = $_POST['tipePtk'];
	if($_POST['tipePtk'] == 'estateNonStaffPemanen')
	{
		return view('master-content/fptkensp');
	}
	elseif ($tipe == 'estateNonStaffMandor')
	{
		return view('master-content/fptkensfm');
	}
	return null;
});

Route::post('/fptkms', 'FptkController@fptkms');
Route::post('/fptkensfm', 'FptkController@fptkensfm');
Route::post('/fptkro', 'FptkController@fptkro');
Route::post('/fptkes', 'FptkController@fptkes');
Route::post('/fptkensr', function(){
	return view('master-content/fptkensr');
});
Route::post('/fptkmns', function(){
	return view('master-content/fptkmns');
});

Route::get('/profile', function(){
	return view('master-content/profile');
});
Route::get('/', function(){
	return view('master-content/ost');
});

/*Using SB-ADMIN*/
Route::get('/fptk', 'FptkController@index');

Route::get('/respons', 'BalikanStringHtmlController@index');

/* -------------- PDM and PSS --------------*/
/* -------------- API ROUTES -------------- */
//getEmpWorkStatus
Route::get('/api/urlGetEmployee', 'ApiController@UrlGetEmployee');
Route::get('/api/urlEmpWorkStatus', 'ApiController@UrlEmpWorkStatus');
Route::get('/api/getOptEmpWorkStatus', 'ApiController@GetOptEmpWorkStatus');
Route::get('/api/getOptCompany', 'ApiController@GetOptCompany');
Route::get('/api/getEmpByNIK', 'ApiController@GetEmpByNIK');
Route::get('/api/getEmpAutoComplete', 'ApiController@GetEmpAutoComplete');
Route::get('/api/getEmpAutoCompletePemanen', 'ApiController@GetEmpAutoCompletePemanen');
Route::get('/api/getEmpAutoCompleteNonPemanen', 'ApiController@GetEmpAutoCompleteNonPemanen');
Route::get('/api/getEmpProductivity', 'ApiController@GetEmpProductivity');
Route::get('/api/getOptBusinessArea', 'ApiController@GetOptBusinessArea');
Route::get('/api/getOptAfdeling', 'ApiController@GetOptAfdeling');
Route::get('/api/getOptJobCode', 'ApiController@GetOptJobCode');
Route::get('/api/getOptJobType', 'ApiController@GetOptJobType');
Route::get('/api/getEmpSearch', 'ApiController@GetEmpSearch');
Route::get('/api/postWsdlPdmCreate', 'ApiController@PostWsdlPdmCreate');
Route::get('/api/postWsdlPdmApprove', 'ApiController@PostWsdlPdmApprove');
Route::get('/api/getOptLevelJabatan' , 'DataMasterController@getLevelJabatan');
Route::get('/api/getOptJabatan/{key}' , 'DataMasterController@getJabatan');
Route::get('/api/getCompany' , 'DataMasterController@getCompany');

/* -------------- END - API ROUTES -------------- */

/* -------------- PAGE ROUTES -------------- */
//Form: Demosi
Route::get('/demosi/approve/{id}','DemosiController@approve');
Route::get('/demosi/store_approve','DemosiController@store_approve');
Route::get('/demosi/create_pemanen','DemosiController@create_pemanen');
Route::get('/demosi/create_non_pemanen','DemosiController@create_non_pemanen');
Route::resource('demosi', 'DemosiController');
Route::resource('sanksi', 'SanksiController');
