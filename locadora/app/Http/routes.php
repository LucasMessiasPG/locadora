<?php

/**
 * @author Jonas Tortato <tortato.jonas@gmail.com>
 * @author Lucas Messias <lucasmessias.pg@outlook.com>
 */

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', ['middleware' => 'App\Http\Middleware\IndexMiddleware','as' => 'index', 'uses' => 'IndexController@index']);

Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('registrar', ['as' => 'registrar.page', 'uses' => 'IndexController@registrar']);

Route::post('registrar', ['as' => 'registrar', 'uses' => 'IndexController@registrarAcao']);

Route::group(['prefix' => 'painel','middleware' => 'App\Http\Middleware\UsuarioMiddleware'], function () {

    Route::get('/', ['as' => 'painel.index', 'uses' => 'HomeController@index']);
    Route::get('editar', ['as' => 'painel.edit', 'uses' => 'HomeController@edit']);
    Route::post('editar/update', ['as' => 'painel.update', 'uses' => 'HomeController@update']);

    Route::get('listar/veiculo', ['as' => 'veiculo.listar', 'uses' => 'VeiculoController@index']);
    Route::get('cadastrar/veiculo', ['as' => 'veiculo.create', 'uses' => 'VeiculoController@create']);
    Route::post('cadastrar/veiculo', ['as' => 'veiculo.store', 'uses' => 'VeiculoController@store']);
});

