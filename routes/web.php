<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

# Rotas para autenticação
Auth::routes(['register' => false]);
Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/logout', 'HomeController@logout')->name('logout');

# Rotas de pacientes
Route::post('/pacientes/destroy/{id}', 'PacientesController@destroy')->name('pacientes.destroy');
Route::post('/pacientes/edit/{id}', 'PacientesController@edit')->name('pacientes.edit');
Route::post('/pacientes/update/{id}', 'PacientesController@update')->name('pacientes.update');
Route::get('/pacientes/show/{id}', 'PacientesController@show')->name('pacientes.show');
Route::post('/pacientes', 'PacientesController@store')->name('pacientes.store');
Route::get('/pacientes', 'PacientesController@index')->name('pacientes.index');
Route::get('/pacientes/create', 'PacientesController@create')->name('pacientes.create');

# Rotas de planos
Route::post('/planos/destroy/{id}', 'PlanosController@destroy')->name('planos.destroy');
Route::post('/planos/edit/{id}', 'PlanosController@edit')->name('planos.edit');
Route::post('/planos/update/{id}', 'PlanosController@update')->name('planos.update');
Route::get('/planos/show/{id}', 'PlanosController@show')->name('planos.show');
Route::post('/planos', 'PlanosController@store')->name('planos.store');
Route::get('/planos', 'PlanosController@index')->name('planos.index');
Route::get('/planos/create', 'PlanosController@create')->name('planos.create');

# Rotas de medicos
Route::post('/medicos/destroy/{id}', 'MedicosController@destroy')->name('medicos.destroy');
Route::post('/medicos/edit/{id}', 'MedicosController@edit')->name('medicos.edit');
Route::post('/medicos/update/{id}', 'MedicosController@update')->name('medicos.update');
Route::get('/medicos/show/{id}', 'MedicosController@show')->name('medicos.show');
Route::post('/medicos', 'MedicosController@store')->name('medicos.store');
Route::get('/medicos', 'MedicosController@index')->name('medicos.index');
Route::get('/medicos/create', 'MedicosController@create')->name('medicos.create');

# Rotas de especialidades
Route::post('/especialidades/destroy/{id}', 'EspecialidadesController@destroy')->name('especialidades.destroy');
Route::post('/especialidades/edit/{id}', 'EspecialidadesController@edit')->name('especialidades.edit');
Route::post('/especialidades/update/{id}', 'EspecialidadesController@update')->name('especialidades.update');
Route::get('/especialidades/show/{id}', 'EspecialidadesController@show')->name('especialidades.show');
Route::post('/especialidades', 'EspecialidadesController@store')->name('especialidades.store');
Route::get('/especialidades', 'EspecialidadesController@index')->name('especialidades.index');
Route::get('/especialidades/create', 'EspecialidadesController@create')->name('especialidades.create');