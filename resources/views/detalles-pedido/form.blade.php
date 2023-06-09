<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_pedido') }}
            {{ Form::text('Id_pedido', $detallesPedido->Id_pedido, ['class' => 'form-control' . ($errors->has('Id_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Id Pedido']) }}
            {!! $errors->first('Id_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_producto') }}
            {{ Form::text('Id_producto', $detallesPedido->Id_producto, ['class' => 'form-control' . ($errors->has('Id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('Id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad_producto_pedido') }}
            {{ Form::text('Cantidad_producto_pedido', $detallesPedido->Cantidad_producto_pedido, ['class' => 'form-control' . ($errors->has('Cantidad_producto_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Producto Pedido']) }}
            {!! $errors->first('Cantidad_producto_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>