
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

//Route::get('/', 'EmployeeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/loginn', 'login2controller@index');
Route::post('/getlogin','login2controller@getlogin');
Route::get('/logout', 'login2controller@logout');
Route::post('/reload', 'login2controller@reload');

//USER
Route::get('/user', 'UserController@index');
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
	if($_POST['tipePtk'] == 'Pemanen')
	{
		return view('master/fptkensp');
	}
	elseif ($tipe == 'mandor') 
	{
		return view('master/fptkensr');
	}
	return null;
});
Route::get('/fptkensfm', function(){
	return view('master/fptkensfm');
});
Route::get('/fptkes', function(){
	return view('master/fptkes');
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

Route::get('/template1', function(){
	return view('master/sb-admin');
});

Route::get('/template2', function(){
	return view('master/sb-admin-2');
});

/*Using SB-ADMIN*/
Route::get('fptka', 'FptkController@index2');

Route::get('/respons', 'BalikanStringHtmlController@index');