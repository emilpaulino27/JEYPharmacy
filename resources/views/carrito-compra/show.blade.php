@extends('layouts.app')

@section('template_title')
    {{ $carritoCompra->name ?? "{{ __('Show') Carrito Compra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Carrito Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carrito-compras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carrito Compra:</strong>
                            {{ $carritoCompra->Id_carrito_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $carritoCompra->Id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $carritoCompra->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Carrito:</strong>
                            {{ $carritoCompra->Estado_carrito }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
