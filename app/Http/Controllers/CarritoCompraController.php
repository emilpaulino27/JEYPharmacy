<?php

namespace App\Http\Controllers;

use App\Models\CarritoCompra;
use Illuminate\Http\Request;

/**
 * Class CarritoCompraController
 * @package App\Http\Controllers
 */
class CarritoCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carritoCompras = CarritoCompra::paginate();

        return view('carrito-compra.index', compact('carritoCompras'))
            ->with('i', (request()->input('page', 1) - 1) * $carritoCompras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carritoCompra = new CarritoCompra();
        return view('carrito-compra.create', compact('carritoCompra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CarritoCompra::$rules);

        $carritoCompra = CarritoCompra::create($request->all());

        return redirect()->route('carrito-compras.index')
            ->with('success', 'CarritoCompra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carritoCompra = CarritoCompra::find($id);

        return view('carrito-compra.show', compact('carritoCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carritoCompra = CarritoCompra::find($id);

        return view('carrito-compra.edit', compact('carritoCompra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CarritoCompra $carritoCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarritoCompra $carritoCompra)
    {
        request()->validate(CarritoCompra::$rules);

        $carritoCompra->update($request->all());

        return redirect()->route('carrito-compras.index')
            ->with('success', 'CarritoCompra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $carritoCompra = CarritoCompra::find($id)->delete();

        return redirect()->route('carrito-compras.index')
            ->with('success', 'CarritoCompra deleted successfully');
    }
}
