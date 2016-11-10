
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

Route::get('/example', function(){
	return view('master-content/blank');
});

Route::get('/home', 'HomeController@index');

Route::get('/loginn', 'AuthController@index');
Route::post('/getlogin','AuthController@test');
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
Route::get('/fptk', 'FptkController@index');
Route::post('/fptk/save', 'FptkController@save');

Route::get('/fptk_common', function(){
	return view('master/fptk_common');
});
Route::get('/fptk_common_bawah', function(){
	return view('master/fptk_common_bawah');
});
Route::post('/fptk', function(){
	$tipe = $_POST['tipePtk'];
	if($_POST['tipePtk'] == 'pemanen')
	{
		return view('master-content/fptkensp');
	}
	elseif ($tipe == 'mandor')
	{
		return view('master-content/fptkensm');
	}
	return null;
});

Route::post('/fptkms', 'FptkController@fptkms');

Route::post('/fptkensr', function(){
	return view('master-content/fptkensr');
});
Route::post('/fptkes', 'FptkController@fptkes');

Route::post('/fptkmns', function(){
	return view('master-content/fptkmns');
});

Route::get('/profile', function(){
	return view('master/profile');
});

Route::get('/', function(){
	return view('master/ost');
});

Route::get('/login', function(){
	return view('master/login');
});

/*Using SB-ADMIN*/
Route::get('fptka', 'FptkController@index2');

Route::get('/respons', 'BalikanStringHtmlController@index');
