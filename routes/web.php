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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('profesores', App\Http\Controllers\ProfesoreController::class);
Route::resource('alumnos', App\Http\Controllers\AlumnoController::class);
Route::resource('materias', App\Http\Controllers\MateriaController::class);
Route::resource('notas', App\Http\Controllers\NotaController::class);