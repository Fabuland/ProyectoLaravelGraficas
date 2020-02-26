@extends('layout')

@section('title', "Editar grafica")

@section('content')
    <h1>Editar grafica</h1>

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

    <form method="POST" action="{{ url("graficas/{$grafica->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="" value="{{ old('nombre', $grafica->nombre) }}">
        <br>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" placeholder="" value="{{ old('modelo', $grafica->modelo) }}">
        <br>
        <label for="compania">Compania:</label>
        <input type="text" name="compania" id="compania" placeholder="" value="{{ old('compania', $grafica->compania) }}">
        <br>
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" placeholder="" value="{{ old('marca', $grafica->marca) }}">
        <br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" placeholder="" value="{{ old('precio', $grafica->precio) }}">
        <br>
        <button type="submit">Editar grafica</button>
    </form>

    <p>
        <a href="{{ route('graficas.index') }}">Regresar a graficas</a>
    </p>
@endsection