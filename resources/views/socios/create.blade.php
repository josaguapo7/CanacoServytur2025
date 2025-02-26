@extends('layouts.app')

@section('content')
    <h2>Crear Socio</h2>
    <form action="{{ route('socios.store') }}" method="POST">
        @csrf
        <label>Clave:</label>
        <input type="text" name="clave" required>
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
