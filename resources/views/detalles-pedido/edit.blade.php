@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Detalles Pedido
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Detalles Pedido</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('detalles-pedidos.update', $detallesPedido->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('detalles-pedido.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
