<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('imagen') }}
<<<<<<< HEAD
            {{ Form::text('imagen', $producto->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
=======
            {{ Form::file('imagen', ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Img', 'required' => 'required']) }}
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('marca', $producto->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
<<<<<<< HEAD
            {{ Form::label('Id_categoria') }}
            {{ Form::text('Id_categoria', $producto->Id_categoria, ['class' => 'form-control' . ($errors->has('Id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Id Categoria']) }}
            {!! $errors->first('Id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_disponible') }}
            {{ Form::text('cant_disponible', $producto->cant_disponible, ['class' => 'form-control' . ($errors->has('cant_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Cant Disponible']) }}
=======
            {{ Form::label('Categoria') }}
            <select name="id_categoria" class="form-control" required>
                <option value="" selected>Seleccionar</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $categoriaSeleccionada ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad Disponible') }}
            {{ Form::number('cant_disponible', $producto->cant_disponible, ['class' => 'form-control' . ($errors->has('cant_disponible') ? ' is-invalid' : ''), 'placeholder' => 'Cant Disponible']) }}
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
            {!! $errors->first('cant_disponible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Presentacion') }}
            <select name="presentacion" class="form-control" required>
                <option value="" {{ $producto->presentacion ? '' : 'selected' }}>Seleccionar</option>
                <option value="Pastillas" {{ $producto->presentacion === 'Pastillas' ? 'selected' : '' }}>Pastillas</option>
                <option value="Jarabe" {{ $producto->presentacion === 'Jarabe' ? 'selected' : '' }}>Jarabe</option>
                <option value="Crema" {{ $producto->presentacion === 'Crema' ? 'selected' : '' }}>Crema</option>
                <option value="Spray" {{ $producto->presentacion === 'Spray' ? 'selected' : '' }}>Spray</option>
                <option value="Otro" {{ $producto->presentacion === 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Vencimiento') }}
            {{ Form::date('fecha_vencimiento', $producto->fecha_vencimiento, ['class' => 'form-control' . ($errors->has('fecha_vencimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Vencimiento']) }}
            {!! $errors->first('fecha_vencimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Restricción') }}
            {{ Form::number('restriccion', $producto->restriccion, ['class' => 'form-control' . ($errors->has('restriccion') ? ' is-invalid' : ''), 'placeholder' => 'Restriccion']) }}
            {!! $errors->first('restriccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>