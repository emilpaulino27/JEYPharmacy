<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_carrito_compra') }}
            {{ Form::text('Id_carrito_compra', $carritoCompra->Id_carrito_compra, ['class' => 'form-control' . ($errors->has('Id_carrito_compra') ? ' is-invalid' : ''), 'placeholder' => 'Id Carrito Compra']) }}
            {!! $errors->first('Id_carrito_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_usuario') }}
            {{ Form::text('Id_usuario', $carritoCompra->Id_usuario, ['class' => 'form-control' . ($errors->has('Id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('Id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $carritoCompra->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado_carrito') }}
            {{ Form::text('Estado_carrito', $carritoCompra->Estado_carrito, ['class' => 'form-control' . ($errors->has('Estado_carrito') ? ' is-invalid' : ''), 'placeholder' => 'Estado Carrito']) }}
            {!! $errors->first('Estado_carrito', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>