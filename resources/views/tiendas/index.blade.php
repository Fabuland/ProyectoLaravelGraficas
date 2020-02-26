@extends('layout')

@section('title', 'Tiendas')

@section('content')
    <br><br>
    <h1>{{ $title }}</h1>

    <p>
        <a href="{{ route('tiendas.create') }}">Nueva tienda</a>
    </p>

    <ul>
        @forelse ($tiendas as $tienda)
            <li>
                {{ $tienda->nombre }}, ({{ $tienda->marca }})
                <a href="{{ route('tiendas.show', $tienda) }}">Ver detalles</a> |
                <a href="{{ route('tiendas.edit', $tienda) }}">Editar</a> |
                <form action="{{ route('tiendas.destroy', $tienda) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit">Eliminar</button>
                </form>
            </li>

        @empty
            <li>No hay tiendas registradas.</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent
@endsection

