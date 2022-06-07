@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Crear nuevo producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.productos.store']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre del producto') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
                    
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('referencia', 'Referencia') !!}
                    {!! Form::text('referencia', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la referencia']) !!}     
                    
                    @error('referencia')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('categoria', 'Categoría') !!}
                    {!! Form::text('categoria', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}     
                
                    @error('categoria')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('precio', 'Precio') !!}
                    {!! Form::number('precio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio del producto']) !!}     

                    @error('precio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('peso', 'Peso') !!}
                    {!! Form::number('peso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el peso del producto']) !!}     
                
                    @error('peso')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('stock', 'Stock') !!}
                    {!! Form::number('stock', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad del producto en bodega']) !!}     
                
                    @error('stock')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

                {!! Form::submit('Crear producto', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
