<?php

namespace App\Http\Controllers;

use App\Models\DetallesPedido;
use Illuminate\Http\Request;

/**
 * Class DetallesPedidoController
 * @package App\Http\Controllers
 */
class DetallesPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesPedidos = DetallesPedido::paginate();

        return view('detalles-pedido.index', compact('detallesPedidos'))
            ->with('i', (request()->input('page', 1) - 1) * $detallesPedidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallesPedido = new DetallesPedido();
        return view('detalles-pedido.create', compact('detallesPedido'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallesPedido::$rules);

        $detallesPedido = DetallesPedido::create($request->all());

        return redirect()->route('detalles-pedidos.index')
            ->with('success', 'DetallesPedido created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesPedido = DetallesPedido::find($id);

        return view('detalles-pedido.show', compact('detallesPedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallesPedido = DetallesPedido::find($id);

        return view('detalles-pedido.edit', compact('detallesPedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallesPedido $detallesPedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallesPedido $detallesPedido)
    {
        request()->validate(DetallesPedido::$rules);

        $detallesPedido->update($request->all());

        return redirect()->route('detalles-pedidos.index')
            ->with('success', 'DetallesPedido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallesPedido = DetallesPedido::find($id)->delete();

        return redirect()->route('detalles-pedidos.index')
            ->with('success', 'DetallesPedido deleted successfully');
    }
}
