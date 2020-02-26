<?php

Route::get('/', 'HomeController@index')->name('home');

//grafica

Route::get('/usuarios', 'UserController@index')
    ->name('users.index');

Route::get('/usuarios/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store');

Route::get('/usuarios/{user}/editar', 'UserController@edit')->name('users.edit');

Route::put('/usuarios/{user}', 'UserController@update');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.destroy');

Route::get('/home', 'HomeController@index')->name('home');

//graficas

Route::get('/graficas', 'GraficaController@index')
    ->name('graficas.index');

Route::get('/graficas/{grafica}', 'GraficaController@show')
    ->where('grafica', '[0-9]+')
    ->name('graficas.show');

Route::get('/graficas/nuevo', 'GraficaController@create')->name('graficas.create');

Route::post('/graficas', 'GraficaController@store');

Route::get('/graficas/{grafica}/editar', 'GraficaController@edit')->name('graficas.edit');

Route::put('/graficas/{grafica}', 'GraficaController@update');

Route::delete('/graficas/{grafica}', 'GraficaController@destroy')->name('graficas.destroy');

//editoriales

Route::get('/tiendas', 'TiendaController@index')
    ->name('tiendas.index');

Route::get('/tiendas/{tienda}', 'TiendaController@show')
    ->where('tienda', '[0-9]+')
    ->name('tiendas.show');

Route::get('/tiendas/nuevo', 'TiendaController@create')->name('tiendas.create');

Route::post('/tiendas', 'TiendaController@store');

Route::get('/tiendas/{tienda}/editar', 'TiendaController@edit')->name('tiendas.edit');

Route::put('/tiendas/{tienda}', 'TiendaController@update');

Route::delete('/tiendas/{tienda}', 'TiendaController@destroy')->name('tiendas.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
