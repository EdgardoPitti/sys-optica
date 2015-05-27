<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('after' => 'no-cache'), function()
{
	Route::get('/', function()
	{
		if(Auth::check()){
			return Redirect::route('datos.pacientes.index');
		}else {
			return View::make('login');	
		}		
	});
	Route::post('sigin', 'AuthController@postLogin');
	Route::get('crear', 'CitasController@crearUser');
	Route::group(array('before' => 'auth'), function(){
		Route::get('logout', 'AuthController@getLogout');
		Route::resource('datos/pacientes','PacientesController');
		Route::resource('datos/citas','CitasController');
		Route::get('getpacientes', 'DatosPacientesController@postPacientes');
		Route::get('reportes/listapacientes', 'ReportesController@getMostrarPacientes');
		Route::resource('print', 'PrintController');	
		Route::post('verificarced', 'PacientesController@getVerificarCed');
		Route::post('getcita', 'CitasController@postData');
	});
});
