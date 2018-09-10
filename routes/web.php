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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/logout', 'Auth\LoginController@logout');
Route::resource('comidas','ComidaController');
Route::resource('estudiantes','EstudianteController');
Route::resource('cursos','CursoController');
Route::resource('ensenanzas','EnsenanzaController');
Route::get('/permisos', 'PermisoController@index')->name('permisos');
Route::resource('ingresos','IngresoController');
Route::resource('salidas','SalidaController');
Route::resource('listados','ListadoController');
Route::resource('buscar','BuscarController');
