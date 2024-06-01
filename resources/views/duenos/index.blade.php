@extends('layouts.app')

@section('content')
    <h1>Dueños</h1>
    <a href="{{ route('duenos.create') }}">Agregar Dueño</a>
    <ul>
        @foreach($duenos as $dueno)
            <li>
                <a href="{{ route('duenos.show', $dueno->id) }}">{{ $dueno->nombre }}</a>
                <a href="{{ route('duenos.edit', $dueno->id) }}">Editar</a>
                <form action="{{ route('duenos.destroy', $dueno->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
