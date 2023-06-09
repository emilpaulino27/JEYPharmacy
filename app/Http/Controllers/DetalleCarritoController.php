<?php

namespace App\Http\Controllers;

use App\Models\DetalleCarrito;
use Illuminate\Http\Request;

/**
 * Class DetalleCarritoController
 * @package App\Http\Controllers
 */
class DetalleCarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleCarritos = DetalleCarrito::paginate();

        return view('detalle-carrito.index', compact('detalleCarritos'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleCarritos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleCarrito = new DetalleCarrito();
        return view('detalle-carrito.create', compact('detalleCarrito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetalleCarrito::$rules);

        $detalleCarrito = DetalleCarrito::create($request->all());

        return redirect()->route('detalle-carritos.index')
            ->with('success', 'DetalleCarrito created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleCarrito = DetalleCarrito::find($id);

        return view('detalle-carrito.show', compact('detalleCarrito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleCarrito = DetalleCarrito::find($id);

        return view('detalle-carrito.edit', compact('detalleCarrito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleCarrito $detalleCarrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleCarrito $detalleCarrito)
    {
        request()->validate(DetalleCarrito::$rules);

        $detalleCarrito->update($request->all());

        return redirect()->route('detalle-carritos.index')
            ->with('success', 'DetalleCarrito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleCarrito = DetalleCarrito::find($id)->delete();

        return redirect()->route('detalle-carritos.index')
            ->with('success', 'DetalleCarrito deleted successfully');
    }
}
