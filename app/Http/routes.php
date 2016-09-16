<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::controllers([
//	'auth'	=>	'Auth\AuthController',
//	'uses'	=>	'Auth\PasswordController',
//]);

// Authentication routes...
Route::get('login', [
	'uses'	=> 'Auth\AuthController@getLogin',
	'as'	=> 'login'
]);

Route::post('login', 'Auth\AuthController@postLogin');

Route::get('logout', [
	'uses' 	=> 'Auth\AuthController@getLogout',
	'as'	=> 'logout'
]);

// Registration routes...
Route::get('register', [
	'uses'	=> 'Auth\AuthController@getRegister',
	'as'	=> 'register'
]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


Route::group(['middleware' => 'auth'], function (){

    Route::get('/solicitar', [
        'as'    =>  'tickets.create',
        'uses'  =>  'TicketsController@create'
    ]);

    Route::get('/home', [
        'as'	=>	'home',
        'uses'	=>	'HomeController@index'
    ]);

    Route::get('/', [
        'as'	=>	'tickets.latest',
        'uses'	=>	'TicketsController@latest'
    ]);

    Route::get('/populares', [
        'as'	=>	'tickets.popular',
        'uses'	=>	'TicketsController@popular'
    ]);

    Route::get('/pendientes', [
        'as'	=>	'tickets.open',
        'uses'	=>	'TicketsController@open'
    ]);

    Route::get('/tutoriales', [
        'as'	=>	'tickets.closed',
        'uses'	=>	'TicketsController@closed'
    ]);

    Route::get('/solicitud/{id}',[
        'as'	=>	'tickets.details',
        'uses'	=> 	'TicketsController@details'
    ]);

});