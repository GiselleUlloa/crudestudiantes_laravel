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

Route::get('estudiantes/pdf', [App\Http\Controllers\EstudianteController::class, 'pdf'] )->name('estudiantes.pdf');

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth');
Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
