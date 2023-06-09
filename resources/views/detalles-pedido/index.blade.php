@extends('layouts.app')

@section('template_title')
    Detalles Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles-pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Pedido</th>
										<th>Id Producto</th>
										<th>Cantidad Producto Pedido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesPedidos as $detallesPedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallesPedido->Id_pedido }}</td>
											<td>{{ $detallesPedido->Id_producto }}</td>
											<td>{{ $detallesPedido->Cantidad_producto_pedido }}</td>

                                            <td>
                                                <form action="{{ route('detalles-pedidos.destroy',$detallesPedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles-pedidos.show',$detallesPedido->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles-pedidos.edit',$detallesPedido->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detallesPedidos->links() !!}
            </div>
        </div>
    </div>
@endsection
