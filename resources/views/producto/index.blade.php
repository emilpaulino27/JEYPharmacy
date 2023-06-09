@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Imagen</th>
										<th>Nombre</th>
<<<<<<< HEAD
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Id Categoria</th>
										<th>Cant Disponible</th>
=======
										<th>Marca</th>
										<th>Precio</th>
										<th>Categoría</th>
										<th>Cantidad Disponible</th>
										<th>Presentación</th>
										<th>Restricción</th>
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->imagen }}</td>
											<td>{{ $producto->nombre }}</td>
<<<<<<< HEAD
											<td>{{ $producto->descripcion }}</td>
											<td>{{ $producto->precio }}</td>
											<td>{{ $producto->Id_categoria }}</td>
=======
											<td>{{ $producto->marca }}</td>
											<td>RD${{ $producto->precio }}.00 p/u</td>
											<td>{{ $producto->categoria->nombre }}</td>
>>>>>>> 7e22deddf3de6d648bdf74d4a083b12d843c379f
											<td>{{ $producto->cant_disponible }}</td>
											<td>{{ $producto->presentacion }}</td>
											<td>{{ $producto->restriccion }}+</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
