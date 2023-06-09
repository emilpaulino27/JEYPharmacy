@extends('layouts.app')

@section('template_title')
    {{ $empleado->Nombre ?? "{{ __('Show') Empleado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $empleado->Id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Tel:</strong>
                            {{ $empleado->Numero_tel }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $empleado->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empleado->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
