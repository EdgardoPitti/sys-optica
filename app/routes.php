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

Route::get('/', function()
{
	if(Auth::check()){
		return View::make('inicio');
	}else {
		return View::make('login');	
	}		
});
/*
Route::get('add', function(){
	DB::table('usuarios')->insert(
            array(
                'user' => 'manuel',
                'password' => Hash::make('190749'),
                'password_crypt' => Crypt::encrypt('190749') 
            )
        );
});*/
Route::post('sigin', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');

Route::resource('datos/pacientes','PacientesController');
Route::resource('datos/citas','CitasController');
Route::get('getpacientes', 'DatosPacientesController@postPacientes');
