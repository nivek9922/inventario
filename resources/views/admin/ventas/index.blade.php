@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Lista de ventas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.ventas.create') }}">Registrar Venta</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Fecha de creación</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($ventas as $venta)
                        <tr>
                            <td>{{ $venta->id }}</td>
                            <td>{{ $venta->nombre}}</td>
                            <td>{{ $venta->stock }}</td>
                            <td>{{ $venta->created_at }}</td>

                           {{--  <td width="10px">
                                <a href="{{ route('admin.productos.edit', $venta) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td> --}}
                            <td width="10px">
                                <form action="{{ route('admin.ventas.destroy', $venta) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
