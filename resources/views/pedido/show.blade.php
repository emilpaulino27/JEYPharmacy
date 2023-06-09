@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pedido:</strong>
                            {{ $pedido->Id_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $pedido->Id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pedido:</strong>
                            {{ $pedido->Fecha_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $pedido->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Pedido:</strong>
                            {{ $pedido->Estado_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion Pago:</strong>
                            {{ $pedido->Opcion_pago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
