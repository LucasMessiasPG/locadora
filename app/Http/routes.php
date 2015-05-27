<?php

/**
 * @author Jonas Tortato <tortato.jonas@gmail.com>
 * @author Lucas Messias <lucasmessias.pg@outlook.com>
 */

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

Route::post('login', ['as' => 'login', 'uses' => 'IndexController@login']);

Route::get('registrar', ['as' => 'registrar', 'uses' => 'IndexController@registrar']);

Route::post('registrar', ['as' => 'registrar', 'uses' => 'IndexController@registrarAcao']);

Route::group(['prefix' => 'logado'], function () {
    Route::get('/', ['as' => 'logado.index', 'uses' => 'HomeController@index']);
});

