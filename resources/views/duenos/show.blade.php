@extends('layouts.app')

@section('content')
    <h1>Detalles del Dueño</h1>
    <p><strong>Nombre:</strong> {{ $dueno->nombre }}</p>
    <p><strong>Dirección:</strong> {{ $dueno->direccion }}</p>
    <p><strong>Teléfono:</strong> {{ $dueno->telefono }}</p>
    <p><strong>Email:</strong> {{ $dueno->email }}</p>
    <a href="{{ route('duenos.edit', $dueno->id) }}">Editar</a>
    <form action="{{ route('duenos.destroy', $dueno->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
