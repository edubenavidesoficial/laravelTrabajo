@extends('layouts.app')

@section('content')
    <h1>Editar Dueño</h1>
    <form action="{{ route('duenos.update', $dueno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $dueno->nombre }}" required>
        </div>
        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" value="{{ $dueno->direccion }}">
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="{{ $dueno->telefono }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $dueno->email }}">
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
