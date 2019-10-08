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

Route::get('/', function () {
    return view('home');
});


Route::middleware(['auth'])->group(function (){
    Route::get('/escolas/novo','EscolaController@novo')->name('novo_cadastro_escola');
    Route::get('/escolas/listar','EscolaController@listar')->name('listar_escola');
    Route::get('/escolas/excluir/{id}','EscolaController@excluir')->name('excluir_escola');
    Route::post('/escolas/salvar','EscolaController@cadastrar')->name('cadastrar_escola');


    Route::get('/visitantes/novo/{id}','VisitanteController@novo')->name('novo_cadastro_visitante');
    Route::post('/visitantes/salvar','VisitanteController@cadastrar')->name('cadastrar_visitante');
    Route::get('/visitantes/listar','VisitanteController@listar')->name('listar_visitante');
    Route::get('/visitantes/excluir/{id}','VisitanteController@excluir')->name('excluir_visitante');

    Route::get('/visitantes/exportar-pdf','PDFController@relatorioVisitantes')->name('exportar_pdf_visitante');
    Route::get('/escolas/exportar-pdf','PDFController@relatorioEscolas')->name('exportar_pdf_escola');






});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
