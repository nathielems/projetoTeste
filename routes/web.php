<?php


use Illuminate\Database\Eloquent\Collection;

    Route::get('/', function() {
        return view('welcome');
    })->name('welcome');
    Route::get('/cadastro', 'PessoaController@create')->name('cadastro');

    Route::post('/salvar', 'PessoaController@store')->name('salvar');

    Route::get('/lista', 'PessoaController@index')->name('lista');

    Route::get('/pdf', 'PessoaController@pdf')->name('pdf');

    Route::get('/pessoas/deletar/{id}','PessoaController@destroy')->name('deletar');

    Route::get('/pessoas/editar/{id}', 'PessoaController@edit')->name('editar');

    Route::get('/pessoas/visualizar/{id}', 'PessoaController@visualizar')->name('visualizar');

    Route::post('/pessoas/editar/atualizar/{id}', 'PessoaController@update')->name('atualizar');



