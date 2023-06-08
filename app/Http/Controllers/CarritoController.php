<?php

namespace App\Http\Controllers;

use App\Models\CarritoCompra;
use App\Models\DetalleCarrito;
use App\Models\DetallesPedido;
use App\Models\Pedido;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function agregarProducto(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');

        // Obtener el carrito actual del usuario autenticado
        $carrito = CarritoCompra::where('Id_usuario', Auth::user()->id)->first();

        // Verificar si el producto ya existe en el carrito
        $detalleCarrito = DetalleCarrito::where('Id_carrito_compra', $carrito->id)
            ->where('Id_producto', $productoId)
            ->first();

        if ($detalleCarrito) {
            // Si el producto ya existe, actualizar la cantidad
            $detalleCarrito->Cantidad_producto += intval($cantidad);
            $detalleCarrito->save();
        } else {
            // Si el producto no existe, crear un nuevo detalle de carrito
            $detalleCarrito = new DetalleCarrito();
            $detalleCarrito->Id_carrito_compra = $carrito->id;
            $detalleCarrito->Id_producto = $productoId;
            $detalleCarrito->cantidad_producto = $cantidad;

            // Obtener el precio unitario del producto
            $producto = Producto::findOrFail($productoId);
            $detalleCarrito->precio_unitario = $producto->precio;

            $detalleCarrito->save();
        }

        return redirect()->route('carrito.mostrar')->with('success', 'Producto agregado al carrito exitosamente.');
    }

    public function mostrarCarrito()
    {
        // Obtener el carrito actual del usuario autenticado
        $carrito = CarritoCompra::where('Id_usuario', auth()->user()->id)->first();

        // Obtener los detalles del carrito para el carrito actual
        $detallesCarrito = DetalleCarrito::with('producto')
            ->where('Id_carrito_compra', $carrito->id)
            ->get();

        // Calcular el subtotal utilizando una consulta SQL
        $subtotal = DB::table('detalle__carrito')
            ->where('Id_carrito_compra', $carrito->id)
            ->sum(DB::raw('cantidad_producto * precio_unitario'));

        // Pasar los datos a la vista
        return view('carrito', compact('carrito', 'detallesCarrito', 'subtotal'));

    }

    public function agregarProductoConCantidad(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad');
    
        // Redireccionar a la ruta carrito.agregar-producto con la cantidad como parámetro
        return redirect()->route('carrito.agregar-producto', ['producto_id' => $productoId, 'cantidad' => $cantidad]);
    }

    public function actualizarCantidad(Request $request, $detalleCarritoId)
    {
        $nuevaCantidad = $request->input('cantidad');

        if ($nuevaCantidad < 1) {
            return redirect()->back()->with('error', 'La cantidad debe ser mayor o igual a 1.');
        }
        
        $detalleCarrito = DetalleCarrito::findOrFail($detalleCarritoId);
        $detalleCarrito->Cantidad_producto = $nuevaCantidad;
        $detalleCarrito->save();
        
        return redirect()->back()->with('success', 'Cantidad actualizada correctamente.');
    }

    public function realizarPedido(Request $request)
    {
        // Obtener el carrito actual del usuario autenticado
        $carrito = CarritoCompra::where('Id_usuario', Auth::user()->id)->first();
        $detallesCarrito = DetalleCarrito::where('Id_carrito_compra', $carrito->id)->get();
    
        // Verificar si el carrito está vacío
        if ($detallesCarrito->isEmpty()) {
            // No hay detalles de carrito, mostrar mensaje de error o redireccionar a una página adecuada
            return redirect()->back()->with('error', 'El carrito está vacío.');
        }
    
        // Crear un nuevo pedido
        $pedido = new Pedido();
        $pedido->Id_usuario = Auth::user()->id;
        $pedido->Fecha_pedido = date('Y-m-d H:i:s');
        $pedido->Direccion = $request->input('Direccion');
        $pedido->Estado_pedido = 1;
        $pedido->Opcion_pago = $request->input('payment_option');
    
        // Calcular el subtotal
        $subtotal = 0;
        foreach ($detallesCarrito as $detalle) {
            $subtotal += $detalle->Precio_unitario * $detalle->Cantidad_producto;
        }

        // Calcular el impuesto
        $impuesto = $subtotal * 0.18;

        // Calcular el total
        $total = $subtotal + $impuesto;
        // Validar que la cantidad ingresada sea mayor o igual al total

        $pedido->Subtotal = $subtotal;
        $pedido->itbis = $impuesto;
        $pedido->Total = $total;
        $pedido->Comentarios = $request->input('Comentarios');
    
        if ($request->input('payment_option') == "tarjeta") {
            // Pago con tarjeta
            $pedido->Titular_tarjeta = $request->input('titular');
            $pedido->Numero_tarjeta = $request->input('credit_card_num');
            $pedido->CVV = $request->input('cvv');
            $pedido->Fecha_expiracion = $request->input('expiracion');
        } elseif ($request->input('payment_option') == "efectivo") {
            // Pago en efectivo+
            $request->validate([
                'Cantidad' => 'required|numeric|min:' . $total,
            ]);
            $montoEfectivo = $request->input('Cantidad');
            $cambio = $montoEfectivo - $total;
            $pedido->Monto_efectivo = $montoEfectivo;
            $pedido->Cambio = $cambio;
    
        }
    
        $pedido->save();
    
        // Agregar los detalles del carrito como items de pedido
        foreach ($detallesCarrito as $detalle) {
            $itemPedido = new DetallesPedido();
            $itemPedido->Id_pedido = $pedido->id;
            $itemPedido->Id_producto = $detalle->Id_producto;
            $itemPedido->Cantidad_producto_pedido = $detalle->Cantidad_producto;
            $itemPedido->Precio_unitario = $detalle->Precio_unitario;
            $itemPedido->save();
        }
    
        // Eliminar los detalles del carrito
        DetalleCarrito::where('Id_carrito_compra', $carrito->id)->delete();
    
        // Redireccionar a la página de confirmación de pedido o realizar cualquier otra acción
        return redirect()->route('pedido.confirmado')->with('success', 'El pedido se ha realizado correctamente.');
    }
    

    public function eliminarProducto($id)
    {
    // Obtener el carrito actual del usuario autenticado
    $carrito = CarritoCompra::where('Id_usuario', Auth::user()->id)->first();

    // Buscar el detalle del carrito con el ID de producto a eliminar
    $detalleEliminar = DetalleCarrito::where('Id_carrito_compra', $carrito->id)
        ->where('Id_producto', $id)->first();
        
    if ($detalleEliminar) {
        // Eliminar el detalle del carrito

        $detalleEliminar->delete();
        return redirect()->route('carrito.mostrar')->with('success', 'El producto ha sido eliminado del carrito.');
    }
    return redirect()->route('carrito.mostrar')->with('error', 'No se pudo eliminar el producto del carrito.');  
}
}