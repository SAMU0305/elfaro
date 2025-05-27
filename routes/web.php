<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Models\Contacto;

//Route::get('/', function () {
  //  return view('home.index');
//});



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/deportes', [HomeController::class, 'deportes'])->name('deportes');
Route::get('/negocios', [HomeController::class, 'negocios'])->name('negocios');
Route::get('/noticias', [HomeController::class, 'noticias'])->name('noticias');


Route::resource('usuario', UsuarioController::class);
Route::resource('contacto', ContactoController::class);
