@extends('layouts.app')

@section('content')
    <h1>Editar Mascota</h1>
    <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $mascota->nombre }}" required>
        </div>
        <div>
            <label for="especie">Especie:</label>
            <input type="text" name="especie" id="especie" value="{{ $mascota->especie }}" required>
        </div>
        <div>
            <label for="raza">Raza:</label>
            <input type="text" name="raza" id="raza" value="{{ $mascota->raza }}">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" value="{{ $mascota->edad }}" required>
        </div>
        <div>
            <label for="dueno_id">Dueño:</label>
            <select name="dueno_id" id="dueno_id" required>
                @foreach($duenos as $dueno)
                    <option value="{{ $dueno->id }}" @if($dueno->id == $mascota->dueno_id) selected @endif>{{ $dueno->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
