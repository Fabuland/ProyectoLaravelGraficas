@extends('layout')

@section('title', "Editar tienda")

@section('content')
    <h1>Editar Tienda</h1>

    @if ($errors->any())
        <div>
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("tiendas/{$tienda->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="" value="{{ old('nombre', $tienda->nombre) }}">
        <br>
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" placeholder="" value="{{ old('marca', $tienda->marca) }}">
        <br>
        <label for="direccion">Direccion:</label>
        <input type="text" name="" id="direccion" placeholder="" value="{{ old('direccion', $tienda->direccion) }}">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="" value="{{ old('tienda', $tienda->tienda) }}">
        <br>
        <button type="submit">Actualizar Tienda</button>
    </form>

    <p>
        <a href="{{ route('tiendas.index') }}">Regresar a tiendas</a>
    </p>
@endsection