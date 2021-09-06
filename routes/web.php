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


//auth home route
// Auth::routes();
// Route::get('/', 'HomeController@index')->name('home');

//Escola routes
Route::get('/', 'EscolaController@index')->name('escola_index');
Route::get('/index_insert','EscolaController@formRegister')->name('escola_formulario');
Route::post('indexinsert','EscolaController@create')->name('escola_create');
Route::get('/index_view/{id}', 'EscolaController@show')->name('escola_view');
Route::put('/index_atualizacao/{id}', 'EscolaController@update')->name('escola_atualizacao');
Route::get('/index_deletar/{id}', 'EscolaController@delete')->name('escola_delete');

//Turma Routes
Route::get('/turmas', 'TurmaController@index')->name('turma_index');
Route::get('/turmas_insert', 'TurmaController@formRegister')->name('turma_formulario');
Route::post('/turmainsert','TurmaController@create')->name('turma_create');
Route::get('/turma_view/{id}','TurmaController@show')->name('turma_view');
Route::put('/turma_atualizacao/{id}','TurmaController@update')->name('turma_atualizacao');
Route::get('/turma_deletar/{id}','TurmaController@delete')->name('turma_deletar');

//Estudante Routes
Route::get('/estudante', 'EstudanteController@index')->name('estudante_index');
Route::get('/estudante_insert', 'EstudanteController@formRegister')->name('estudante_formulario');
Route::post('estudanteinsert','EstudanteController@create')->name('estudante_create');
Route::get('/estudante_view/{id}','EstudanteController@show')->name('estudante_view');
Route::put('/estudante_atualizacao/{id}','EstudanteController@update')->name('estudante_atualizacao');
Route::get('/estudante_deletar/{id}','EstudanteController@delete')->name('estudante_deletar');
