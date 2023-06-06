<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', [HomeController::class, 'index']);

//Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/', function () {
    return view('home.userpage');
});

/*Route::get('/productos-view', function () {
    return view('productos');
})->name('productos-view');*/

Route::get('/detalle_productos', function () {
    return view('detalle_productos');
})->name('detalle_productos');

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::get('/products-view', [App\Http\Controllers\ProductoController::class, 'productVw'])->name('productos-view')->middleware('auth');

