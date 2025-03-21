@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Lista de Socios</h2>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulario para subir el archivo --}}
    <form action="{{ route('admin.socios.import') }}" method="POST" enctype="multipart/form-data" class="mb-6">
        @csrf
        <div class="flex items-center gap-4">
            <input type="file" name="file" class="border border-gray-300 rounded-lg p-2 w-1/2" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                Subir archivo
            </button>
        </div>
    </form>

    {{-- Tabla de socios --}}
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left font-semibold">Clave</th>
                    <th class="px-6 py-3 text-left font-semibold">Nombre</th>
                    <th class="px-6 py-3 text-left font-semibold">Zona</th>
                    <th class="px-6 py-3 text-left font-semibold">Tipo</th>
                    <th class="px-6 py-3 text-left font-semibold">Email</th>
                    <th class="px-6 py-3 text-left font-semibold">Estatus</th>
                    <th class="px-6 py-3 text-left font-semibold">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($socios as $socio)
                    <tr class="hover:bg-gray-50 border-b">
                        <td class="px-6 py-4">{{ $socio->clave }}</td>
                        <td class="px-6 py-4">{{ $socio->nombre }}</td>
                        <td class="px-6 py-4">{{ $socio->zona }}</td>
                        <td class="px-6 py-4">{{ $socio->tipo }}</td>
                        <td class="px-6 py-4">{{ $socio->email ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $socio->estatus }}</td>
                        <td class="px-6 py-4">
                            <a href="#" class="text-blue-500 hover:underline">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
