@extends('layouts.app')

@section('template_title')
    Carrito Compra
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carrito Compra') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carrito-compras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Id Usuario</th>
										<th>Fecha</th>
										<th>Estado Carrito</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carritoCompras as $carritoCompra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $carritoCompra->Id_carrito_compra }}</td>
											<td>{{ $carritoCompra->Id_usuario }}</td>
											<td>{{ $carritoCompra->Fecha }}</td>
											<td>{{ $carritoCompra->Estado_carrito }}</td>

                                            <td>
                                                <form action="{{ route('carrito-compras.destroy',$carritoCompra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carrito-compras.show',$carritoCompra->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carrito-compras.edit',$carritoCompra->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $carritoCompras->links() !!}
            </div>
        </div>
    </div>
@endsection
