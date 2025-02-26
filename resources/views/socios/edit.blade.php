@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6">Editar Socio</h2>

    <form action="{{ route('socios.update', $socio->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col">
            <label for="clave" class="text-sm font-medium text-gray-700">Clave:</label>
            <input type="text" name="clave" value="{{ $socio->clave }}" id="clave" required class="border px-4 py-2 rounded">
        </div>

        <div class="flex flex-col">
            <label for="zona_cliente" class="text-sm font-medium text-gray-700">Zona Cliente:</label>
            <input type="text" name="zona_cliente" value="{{ $socio->zona_cliente }}" id="zona_cliente" required class="border px-4 py-2 rounded">
        </div>

        <div class="flex flex-col">
            <label for="tipo_cliente" class="text-sm font-medium text-gray-700">Tipo Cliente:</label>
            <input type="text" name="tipo_cliente" value="{{ $socio->tipo_cliente }}" id="tipo_cliente" required class="border px-4 py-2 rounded">
        </div>

        <div class="flex flex-col">
            <label for="nombre" class="text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" name="nombre" value="{{ $socio->nombre }}" id="nombre" required class="border px-4 py-2 rounded">
        </div>

        <div class="flex flex-col">
            <label for="rfc" class="text-sm font-medium text-gray-700">RFC:</label>
            <input type="text" name="rfc" value="{{ $socio->rfc }}" id="rfc" required class="border px-4 py-2 rounded">
        </div>

        <div class="flex flex-col">
            <label for="email" class="text-sm font-medium text-gray-700">Email:</label>
            <input type="email" name="email" value="{{ $socio->email }}" id="email" required class="border px-4 py-2 rounded">
        </div>

        <div class="flex flex-col">
            <label for="estatus" class="text-sm font-medium text-gray-700">Estatus:</label>
            <input type="text" name="estatus" value="{{ $socio->estatus }}" id="estatus" required class="border px-4 py-2 rounded">
        </div>

        <button type="submit" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-600">Actualizar</button>
    </form>
</div>
@endsection
