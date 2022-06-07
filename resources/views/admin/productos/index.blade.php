@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Lista de productos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.productos.create') }}">Agregar producto</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Referencia</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Peso</th>
                        <th>Stock</th>
                        <th>Fecha de creación</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->referencia }}</td>
                            <td>{{ $producto->categoria }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->peso }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td>{{ $producto->created_at }}</td>

                            <td width="10px">
                                <a href="{{ route('admin.productos.edit', $producto) }}"
                                    class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.productos.destroy', $producto) }}" method="POST">
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
