@extends('layout')

@section('title', "Crear Tienda")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear Tienda</h4>
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

            <form method="POST" action="{{ url('tiendas') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" value="{{ old('nombre') }}">
                </div>

                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" name="marca" id="marca" placeholder="" value="{{ old('marca') }}">
                </div>

                <div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="" value="{{ old('direccion') }}">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="" value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn btn-primary">Crear Tienda</button>
                <a href="{{ route('tiendas.index') }}" class="btn btn-link">Regresar a tiendas</a>
            </form>
        </div>
    </div>
@endsection