<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_estado_pedido') }}
            {{ Form::text('Id_estado_pedido', $estadoPedido->Id_estado_pedido, ['class' => 'form-control' . ($errors->has('Id_estado_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Id Estado Pedido']) }}
            {!! $errors->first('Id_estado_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion_pedido') }}
            {{ Form::text('Descripcion_pedido', $estadoPedido->Descripcion_pedido, ['class' => 'form-control' . ($errors->has('Descripcion_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Pedido']) }}
            {!! $errors->first('Descripcion_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>