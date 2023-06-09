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

/*Route::get('/', function () {
    return view('home.userpage');
});
*/
Route::get('/', [App\Http\Controllers\ProductoController::class, 'mostrarProductos']);

/*Route::get('/productos-view', function () {
    return view('productos');
})->name('productos-view');*/
/*
Route::get('/detalle_productos', function () {
    return view('detalle_productos');
})->name('detalle_productos');*/

<<<<<<< HEAD

Route::get('empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
Route::delete('empleados/{empleados}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');
Route::get('/empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');
Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');
Route::match(['PUT', 'PATCH'], '/empleado/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');

=======
/*Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');*/
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f

Route::resource('productos', App\Http\Controllers\ProductoController::class)->middleware('auth');
Route::get('/products-view', [App\Http\Controllers\ProductoController::class, 'productVw'])->name('productos-view');
Route::get('/products-detail/{id}', [App\Http\Controllers\ProductoController::class, 'showDetail'])->name('productos-detail');

<<<<<<< HEAD

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::get('/carrito/agregar-producto', [App\Http\Controllers\CarritoController::class, 'agregarProducto'])->name('carrito.agregar-producto')->middleware('auth');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'mostrarCarrito'])
    ->name('carrito.mostrar')
    ->middleware('auth');

Route::post('/carrito/agregar-producto-con-cantidad', [App\Http\Controllers\CarritoController::class, 'agregarProductoConCantidad'])->name('carrito.agregar-producto-con-cantidad')->middleware('auth');
Route::put('/carrito/actualizar-cantidad/{detalleCarrito}', [App\Http\Controllers\CarritoController::class, 'actualizarCantidad'])
->name('carrito.actualizar-cantidad')
->middleware('auth');

Route::delete('/carrito/eliminar-producto/{id}', [App\Http\Controllers\CarritoController::class, 'eliminarProducto'])->name('carrito.eliminar-producto')->middleware('auth');


Route::post('/carrito/realizar-pedido', [App\Http\Controllers\CarritoController::class, 'realizarPedido'])->name('carrito.realizar-pedido')->middleware('auth');

Route::get('/pedido-confirmado', function () {
    return view('pedido_confirmado');
})->name('pedido.confirmado')->middleware('auth');
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
