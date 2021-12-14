<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ClienteController;


Route::resource('perfil', PerfilController::class);
Route::resource('inventario', InventarioController::class);
Route::resource('facturar', FacturacionController::class);
Route::resource('cliente', ClienteController::class);


Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/search', function () {
//      return view('partials.clientes', ['cliente' =>cliente::where('id', 'LIKE','%'.request('q').'%')->get()
//     ]);
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class,'Roles']);

