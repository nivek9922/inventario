@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Registro de venta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.ventas.store']) !!}


                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                     <select name="nombre" class="form-control" id="nombre">
                         @foreach ($productos as $producto)
                             <option value="{{$producto->nombre}}">{{$producto->nombre}}</option>
                         @endforeach
                     </select>
                 </div>


                <div class="form-group">
                    {!! Form::label('stock', 'Stock') !!}
                    {!! Form::number('stock', null, ['class' => 'form-control']) !!}     
                
                    @error('stock')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

                {!! Form::submit('Registrar Venta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    {{-- {!! Html::script('melody/js/alert.js') !!}
    {!! Html::script('melody/js/avgrund.js') !!}

    <script> 
        var cont = 1;
        total = 0;
        subtotal = [];

        $("#nombre").change(mostrarValores);

        function mostrarValores(){
            datosProducto = document.getElementById('nombre').value.split('_');
            $("precio").val(datosProducto[0]);
            $("stock").val(datosProducto[1]);
        }
    </script> --}}
@stop
