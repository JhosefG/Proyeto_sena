<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('/welcome');
});
Route::resource('perfil', PerfilController::class);
Route::resource('inventario', InventarioController::class);
Route::resource('facturar', FacturacionController::class);
Route::resource('cliente', ClienteController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class,'Roles']);

