<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes([
    'register' => false
]);
Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/logout', 'HomeController@logout')->name('logout');

# Rotas de pacientes
Route::post('/pacientes/destroy/{id}', 'PacienteController@destroy')->name('pacientes.destroy');
Route::post('/pacientes/edit/{id}', 'PacienteController@edit')->name('pacientes.edit');
Route::post('/pacientes/update/{id}', 'PacienteController@update')->name('pacientes.update');
Route::get('/pacientes/show/{id}', 'PacienteController@show')->name('pacientes.show');
Route::post('/pacientes', 'PacienteController@store')->name('pacientes.store');
Route::get('/pacientes', 'PacienteController@index')->name('pacientes.index');
Route::get('/pacientes/create', 'PacienteController@create')->name('pacientes.create');