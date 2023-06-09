@extends('layouts.app')

@section('template_title')
    Detalle Carrito
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Carrito') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-carritos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Carrito Compra</th>
										<th>Id Producto</th>
										<th>Cantidad Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleCarritos as $detalleCarrito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleCarrito->Id_carrito_compra }}</td>
											<td>{{ $detalleCarrito->Id_producto }}</td>
											<td>{{ $detalleCarrito->Cantidad_producto }}</td>

                                            <td>
                                                <form action="{{ route('detalle-carritos.destroy',$detalleCarrito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-carritos.show',$detalleCarrito->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-carritos.edit',$detalleCarrito->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detalleCarritos->links() !!}
            </div>
        </div>
    </div>
@endsection
