@extends('layouts.app')

@section('template_title')
    {{ $detallesPedido->name ?? "{{ __('Show') Detalles Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalles Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles-pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pedido:</strong>
                            {{ $detallesPedido->Id_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $detallesPedido->Id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Producto Pedido:</strong>
                            {{ $detallesPedido->Cantidad_producto_pedido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
