<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/usuarios/','usuarioControler@index')
	->name('usuarios.index');

Route::get('/usuarios/{usuario}','usuarioControler@show')
			->where('usuario','[0-9]+')
			->name('usuarios.show');

Route::get('/usuarios/nuevo','usuarioControler@create')
			->name('usuarios.new');

Route::post('/usuarios/crear','usuarioControler@store');

///ejemplo para enviar mas de un parametro a la nueva ruta
Route::get('/usuarios/datos/{nombre}/{apellido}','usuarioAuxiliarController@index')
			->where(['nombre' => '[A-Za-z]+','apellido' => '[A-Za-z]+']);

/// ejemplo para enviar parametros que pueden ser nulos si es que no s e envian o tener un valor  predeterminado
Route::get('/usuarios/cargo/{nombre}/{apellido}/{cargo?}/{edad?}','usuarioAuxiliarController@cargo')
			->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]+', 'cargo' => '[A-Za-z]+', 'edad' => '[0-9]+']);

