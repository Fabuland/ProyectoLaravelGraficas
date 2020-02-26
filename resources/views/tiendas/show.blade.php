@extends('layout')

@section('title', "Tienda {$tienda->id}")

@section('content')
    <h1>Juego #{{ $tienda->id }}</h1>

    <p>Nombre de la tienda: {{ $tienda->nombre }}</p>
    <p>Marca: {{ $tienda->marca }}</p>
    <p>Direccion: {{ $tienda->direccion }}</p>
    <p>Email: {{ $tienda->email }}</p>

    <p>
        <a href="{{ route('tiendas.index') }}">Regresar a tiendas</a>
    </p>
@endsection