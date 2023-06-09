<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_carrito_compra') }}
            {{ Form::text('Id_carrito_compra', $detalleCarrito->Id_carrito_compra, ['class' => 'form-control' . ($errors->has('Id_carrito_compra') ? ' is-invalid' : ''), 'placeholder' => 'Id Carrito Compra']) }}
            {!! $errors->first('Id_carrito_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_producto') }}
            {{ Form::text('Id_producto', $detalleCarrito->Id_producto, ['class' => 'form-control' . ($errors->has('Id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('Id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad_producto') }}
            {{ Form::text('Cantidad_producto', $detalleCarrito->Cantidad_producto, ['class' => 'form-control' . ($errors->has('Cantidad_producto') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Producto']) }}
            {!! $errors->first('Cantidad_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>