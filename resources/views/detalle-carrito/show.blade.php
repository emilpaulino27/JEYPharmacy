@extends('layouts.app')

@section('template_title')
    {{ $detalleCarrito->name ?? "{{ __('Show') Detalle Carrito" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Carrito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-carritos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carrito Compra:</strong>
                            {{ $detalleCarrito->Id_carrito_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $detalleCarrito->Id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Producto:</strong>
                            {{ $detalleCarrito->Cantidad_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
