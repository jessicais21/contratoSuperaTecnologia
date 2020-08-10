<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - aqui cria as rotas
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//principal rota /usuario
Route::get('/usuario','usuariosController@create');
Route::post('/usuario','usuariosController@store')->name('registrar_usuario');
Route::get('/usuario/{cpf}','usuariosController@view')->name('listar_usuario');
Route::get('/usuario/excluir/{cpf}','usuariosController@delete');
Route::get('/usuario/excluir/{cpf}','usuariosController@destroy')->name('excluir_usuario');
//Route::get('/usuario','usuariosController@view')->name('listar_usuario');
//Route::get('/usuario/{cpf}/listar', 'usuariosController@view')->name('usuario.listar');

//principal rota / unidade(não esta funcionando)
//rota da unidade que está funcionando = /unidades2
//Route::get('/unidades','UnidadesController@create');
//Route::post('/unidades','UnidadesController@store')->name('registrar_unidade');
Route::get('/unidades2','Unidades2Controller@create');
Route::post('/unidades2','Unidades2Controller@store')->name('registrar_unidade');
Route::get('/unidades2/excluir/{nome}','Unidades2Controller@delete');
Route::get('/unidades2/excluir/{nome}','Unidades2Controller@destroy')->name('excluir_unidade2');
Route::get('/unidades2/{nome}','Unidades2Controller@view')->name('listar_unidade');
//Route::get('/unidades2/edit/{nome}','Unidades2Controller@edit');
//Route::post('/unidades2/edit/{nome}','Unidades2Controller@update')->name('alterar_unidade');
Route::get('/unidades2/edit/{nome}','Unidades2Controller@edit');

Route::post('/unidades2/edit/{nome}','Unidades2Controller@update')->name('alterar_unidade');

//atestados
Route::get('/atestado','AtestadosController@create');
Route::post('/atestado','AtestadosController@store')->name('registrar_atestado');
Route::get('/atestado/excluir/{paciente}','AtestadosController@delete');
Route::get('/atestado/excluir/{paciente}','AtestadosController@destroy')->name('excluir_atestado');
Route::get('/atestado/{nome}','AtestadosController@view')->name('listar_unidade');

//rotas dos contratos
Route::get('/contrato','ContratosController@create');
Route::post('/contrato','ContratosController@store')->name('registrar_contrato');
Route::get('/contrato/excluir/{cnpj}','ContratosController@delete');
Route::get('/contrato/excluir/{cnpj}','ContratosController@destroy')->name('excluir_contrato');
Route::get('/contrato/{cnpj}','ContratosController@view')->name('listar_contrato');

//usuario escolher as rotas


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

