<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/funcionarios', 'FuncionariosController@index');
Route::get('/funcionarios/add', 'FuncionariosController@add');
Route::post('/funcionarios/salvar', 'FuncionariosController@salvar');
Route::get('/funcionarios/{funcionario}/editar', 'FuncionariosController@editar');
Route::patch('/funcionarios/{funcionario}', 'FuncionariosController@atualizar');
Route::delete('/funcionarios/{funcionario}', 'FuncionariosController@deletar');

Route::get('/setores', 'SetoresController@index');
Route::get('/setores/add', 'SetoresController@add');
Route::post('/setores/salvar', 'SetoresController@salvar');
Route::get('/setores/{setor}/editar', 'SetoresController@editar');
Route::patch('/setores/{setor}', 'SetoresController@atualizar');
Route::delete('/setores/{setor}', 'SetoresController@deletar');

Route::get('/cargos', 'CargosController@index');
Route::get('/cargos/add', 'CargosController@add');
Route::post('/cargos/salvar', 'CargosController@salvar');
Route::get('/cargos/{cargo}/editar', 'CargosController@editar');
Route::patch('/cargos/{cargo}', 'CargosController@atualizar');
Route::delete('/cargos/{cargo}', 'CargosController@deletar');

Route::any('/pdfs/gerapdf', 'PDFController@gerapdf');
Route::any('/pdfs/pesquisa', 'PDFController@pesquisa');


//Route::get('/login', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
