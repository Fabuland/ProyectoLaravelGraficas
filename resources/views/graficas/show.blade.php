@extends('layout')

@section('title', "Grafica {$grafica->id}")

@section('content')
    <h1>Grafica #{{ $grafica->id }}</h1>

    <p>Nombre de la grafica: {{ $grafica->nombre }}</p>
    <p>Modeo: {{ $grafica->modelo }}</p>
    <p>Compania: {{ $grafica->compania }}</p>
    <p>Marca: {{ $grafica->marca }}</p>
    <p>Precio: {{ $grafica->precio }}</p>

    <p>
        <a href="{{ route('graficas.index') }}">Regresar a graficas</a>
    </p>
@endsection