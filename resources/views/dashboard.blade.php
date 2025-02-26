@extends('layouts.app')
@section('content')

<link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">

<div class="flex items-center justify-end gap-3">
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
       class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-150 hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
       Salir
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</div>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Panel de Socios</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para subir Excel -->
    <form action="{{ route('importar.excel') }}" method="POST" enctype="multipart/form-data" class="mb-4">
        @csrf
        <input type="file" name="file" class="border px-4 py-2 rounded">
        <button type="submit" class="ml-2 bg-green-500 text-white px-4 py-2 rounded">Subir Excel</button>
    </form>

    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Clave
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Zona Cliente
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Tipo Cliente
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    RFC
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Estatus
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($socios as $socio)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->clave }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->zona_cliente }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->tipo_cliente }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->nombre }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->rfc }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $socio->estatus == 'Activo' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $socio->estatus }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('socios.edit', $socio->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                        <form action="{{ route('socios.destroy', $socio->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Eliminar este socio?')" class="ml-2 text-red-600 hover:text-red-900">Eliminar</button>
                        </form>
                        <a href="{{ route('socios.generarQR', $socio->id) }}" class="ml-2 text-blue-600 hover:text-blue-900">Generar QR</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
