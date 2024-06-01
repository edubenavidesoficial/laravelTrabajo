@extends('layouts.app')

@section('content')
    <h1>Detalles de la Mascota</h1>
    <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
    <p><strong>Especie:</strong> {{ $mascota->especie }}</p>
    <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
    <p><strong>Edad:</strong> {{ $mascota->edad }}</p>
    <p><strong>Dueño:</strong>
