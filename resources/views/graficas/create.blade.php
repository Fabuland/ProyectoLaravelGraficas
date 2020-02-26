@extends('layout')

@section('title', "Insertar grafica")

@section('content')
    <div class="card">
        <h4 class="card-header">Insertar grafica</h4>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor corrige los errores debajo:</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ url('graficas') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" value="{{ old('nombre') }}">
                </div>

                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" name="modelo" id="modelo" placeholder="" value="{{ old('modelo') }}">
                </div>

                <div class="form-group">
                    <label for="compania">Compania:</label>
                    <input type="text" class="form-control" name="compania" id="compania" placeholder="" value="{{ old('compania') }}">
                </div>

                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" name="marca" id="marca" placeholder="" value="{{ old('marca') }}">
                </div>

                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control" name="precio" id="precio" placeholder="" value="{{ old('precio') }}">
                </div>                                

                <button type="submit" class="btn btn-primary">Insertar nueva gráfica</button>
                <a href="{{ route('graficas.index') }}" class="btn btn-link">Regresar al gráficas</a>
            </form>
        </div>
    </div>
@endsection