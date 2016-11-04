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
Route::bind('autoridades', function($autoridades){
    return App\Autoridades::find($autoridades);
});



Route::bind('dependencias', function($dependencias){
    return App\Dependencias::find($dependencias);
});



Route::get('/', [
	'as' => 'index',
	'uses' => 'StoreController@index'
	]);



// Authentication routes...
Route::get('auth/login', [
    'as' => 'login-get',
    'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
    'as' => 'login-post',
    'uses' => 'Auth\LoginController@postLogin'
]);

Route::get('auth/logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
    'as' => 'register-get',
    'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
    'as' => 'register-post',
    'uses' => 'Auth\AuthController@postRegister'
]);


Auth::routes();

Route::get('/home', 'HomeController@index');


//-----ADMIN



Route::resource('admin/autoridades', 'Admin\AutoridadesController');

Route::get('autoridades/index', [
    'uses' => 'Admin\AutoridadesController@index',
    'as' => 'admin.autoridades.index'
]);
Route::get('autoridades/edit/{autoridades}', [
    'uses' => 'Admin\AutoridadesController@edit',
    'as' => 'admin.autoridades.edit'
]);

Route::post('autoridades/store', [
    'uses' => 'Admin\AutoridadesController@store',
    'as' => 'admin.autoridades.store'
]);

Route::put('autoridades/update/{autoridades}', [
    'uses' => 'Admin\AutoridadesController@update',
    'as' => 'admin.autoridades.update'
]);

Route::delete('autoridades/delete/{autoridades}', [
    'uses' => 'Admin\AutoridadesController@destroy',
    'as' => 'admin.autoridades.destroy'
]);


// RUTAS PARA dependencias
Route::resource('admin/dependencias', 'Admin\DependenciasController');


Route::get('dependencias/index', [
    'uses' => 'Admin\DependenciasController@index',
    'as' => 'admin.dependencias.index'
]);


Route::get('dependencias/edit/{id}', [
    'uses' => 'Admin\DependenciasController@edit',
    'as' => 'admin.dependencias.edit'
]);

Route::post('dependencias/store', [
    'uses' => 'Admin\DependenciasController@store',
    'as' => 'admin.dependencias.store'
]);

Route::put('dependencias/update/{id}', [
    'uses' => 'Admin\DependenciasController@update',
    'as' => 'admin.dependencias.update'
]);

Route::delete('dependencias/delete/{dependencias}', [
    'uses' => 'Admin\DependenciasController@destroy',
    'as' => 'admin.dependencias.destroy'
]);



