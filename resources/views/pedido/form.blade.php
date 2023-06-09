<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id_pedido') }}
            {{ Form::text('Id_pedido', $pedido->Id_pedido, ['class' => 'form-control' . ($errors->has('Id_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Id Pedido']) }}
            {!! $errors->first('Id_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id_usuario') }}
            {{ Form::text('Id_usuario', $pedido->Id_usuario, ['class' => 'form-control' . ($errors->has('Id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('Id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_pedido') }}
            {{ Form::text('Fecha_pedido', $pedido->Fecha_pedido, ['class' => 'form-control' . ($errors->has('Fecha_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pedido']) }}
            {!! $errors->first('Fecha_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $pedido->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado_pedido') }}
            {{ Form::text('Estado_pedido', $pedido->Estado_pedido, ['class' => 'form-control' . ($errors->has('Estado_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Estado Pedido']) }}
            {!! $errors->first('Estado_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Opcion_pago') }}
            {{ Form::text('Opcion_pago', $pedido->Opcion_pago, ['class' => 'form-control' . ($errors->has('Opcion_pago') ? ' is-invalid' : ''), 'placeholder' => 'Opcion Pago']) }}
            {!! $errors->first('Opcion_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>