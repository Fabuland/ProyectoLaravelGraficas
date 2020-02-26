@extends('layout')

@section('title', 'Graficas')

@section('content')
    <br><br>
    <h1>{{ $title }}</h1>

    <p>
        <a href="{{ route('graficas.create') }}">Nueva grafica</a>
    </p>

    <ul>
        @forelse ($graficas as $grafica)
            <li>
                {{ $grafica->nombre }}, ({{ $grafica->marca }})
                <a href="{{ route('graficas.show', $grafica) }}">Ver detalles</a> |
                <a href="{{ route('graficas.edit', $grafica) }}">Editar</a> |
                <form action="{{ route('graficas.destroy', $grafica) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit">Eliminar</button>
                </form>
            </li>

        @empty
            <li>No hay Graficas registrados.</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent
@endsection

