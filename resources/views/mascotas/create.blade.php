@extends('layouts.app')

@section('content')
    <h1>Agregar Nueva Mascota</h1>
    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="especie">Especie:</label>
            <input type="text" name="especie" id="especie" required>
        </div>
        <div>
            <label for="raza">Raza:</label>
            <input type="text" name="raza" id="raza">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" required>
        </div>
        <div>
            <label for="dueno_id">Dueño:</label>
            <select name="dueno_id" id="dueno_id" required>
                @foreach($duenos as $dueno)
                    <option value="{{ $dueno->id }}">{{ $dueno->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
