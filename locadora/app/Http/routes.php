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
    Route::get('editar/{id_usuario?}', ['as' => 'painel.edit', 'uses' => 'HomeController@edit']);
    Route::post('editar/update', ['as' => 'painel.update', 'uses' => 'HomeController@update']);

    /**
     * Rotas para telas de veículo
     */
    Route::get('veiculo/listar', ['as' => 'veiculo.listar', 'uses' => 'VeiculoController@index']);
    Route::get('cadastrar/veiculo', ['as' => 'veiculo.create', 'uses' => 'VeiculoController@create']);
    Route::post('cadastrar/veiculo', ['as' => 'veiculo.store', 'uses' => 'VeiculoController@store']);
    Route::get('cadastrar/marca', ['as' => 'veiculo.createMarca', 'uses' => 'VeiculoController@createMarca']);
    Route::post('cadastrar/marca', ['as' => 'veiculo.storeMarca', 'uses' => 'VeiculoController@storeMarca']);
    Route::get('cadastrar/modelo', ['as' => 'veiculo.createModelo', 'uses' => 'VeiculoController@createModelo']);
    Route::post('cadastrar/modelo', ['as' => 'veiculo.storeModelo', 'uses' => 'VeiculoController@storeModelo']);
    Route::get('cadastrar/cor', ['as' => 'veiculo.createCor', 'uses' => 'VeiculoController@createCor']);
    Route::post('cadastrar/cor', ['as' => 'veiculo.storeCor', 'uses' => 'VeiculoController@storeCor']);

    /**
     * Rotas para telas de funcionario
     */
    Route::get('funcionario/listar', ['as' => 'funcionario.listar', 'uses' => 'FuncionarioController@listar']);
    Route::get('funcionario/cadastrar', ['as' => 'funcionario.cadastrar', 'uses' => 'FuncionarioController@cadastrar']);

    Route::post('funcionario/cadastrar', ['as' => 'funcionario.cadastar', 'uses' => 'IndexController@registrarAcao']);

    Route::get('funcionario/editar/{id_usuario}', ['as' => 'funcionario.editar', 'uses' => 'FuncionarioController@editar']);
    Route::get('funcionario/remover/{id_usuario}', ['as' => 'funcionario.demitir', 'uses' => 'FuncionarioController@destroy']);
});