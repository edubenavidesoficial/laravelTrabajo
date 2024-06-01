@extends('layouts.app')

@section('content')
    <h1>Mascotas</h1>
    <a href="{{ route('mascotas.create') }}">Agregar Mascota</a>
    <ul>
        @foreach($mascotas as $mascota)
            <li>
                <a href="{{ route('mascotas.show', $mascota->id) }}">{{ $mascota->nombre }}</a>
                <a href="{{ route('mascotas.edit', $mascota->id) }}">Editar</a>
                <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>
