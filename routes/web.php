<?php

use App\Http\Controllers\CategoriumController;
use App\Http\Controllers\EmpleadoController;
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


Route::get('empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
Route::delete('empleados/{empleados}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');
Route::get('/empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');
Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');
Route::match(['PUT', 'PATCH'], '/empleado/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');


Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::get('/products-view', [App\Http\Controllers\ProductoController::class, 'productVw'])->name('productos-view')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
