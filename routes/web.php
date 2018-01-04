<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/usuarios/','usuarioControler@index');

Route::get('/usuarios/{id}','usuarioControler@show')
			->where('id','[0-9]+');

Route::get('/usuarios/nuevo','usuarioControler@create');

///ejemplo para enviar mas de un parametro a la nueva ruta
Route::get('/usuarios/datos/{nombre}/{apellido}','usuarioAuxiliarController@index')
			->where(['nombre' => '[A-Za-z]+','apellido' => '[A-Za-z]+']);

/// ejemplo para enviar parametros que pueden ser nulos si es que no s e envian o tener un valor  predeterminado
Route::get('/usuarios/cargo/{nombre}/{apellido}/{cargo?}/{edad?}','usuarioAuxiliarController@cargo')
			->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]+', 'cargo' => '[A-Za-z]+', 'edad' => '[0-9]+']);