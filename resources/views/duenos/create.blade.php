@extends('layouts.app')

@section('content')
    <h1>Agregar Nuevo Dueño</h1>
    <form action="{{ route('duenos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion">
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
