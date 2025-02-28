 <!-- Contenido principal -->
 <div class="flex-1 p-8 ml-64">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-4xl font-bold text-blue-900">Panel de Socios</h1>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="px-4 py-2 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-500 transition">
           Salir
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif


</div>

<!-- Formulario para subir Excel -->
<form action="{{ route('importar.excel') }}" method="POST" enctype="multipart/form-data" class="mb-6 flex items-center gap-3">
    @csrf
    <input type="file" name="file" class="border border-gray-300 px-4 py-2 rounded-lg shadow-sm">
    <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-800 transition">Subir Excel</button>
</form>

<div class="overflow-x-auto bg-white shadow-lg rounded-lg">
    <table class="w-full min-w-max divide-y divide-gray-200">
        <thead class="bg-blue-900 text-white">
            <tr>
                @foreach (["Clave", "Zona Cliente", "Tipo Cliente", "Nombre", "RFC", "Email", "Estatus", "Acciones"] as $header)
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($socios as $socio)
                <tr class="hover:bg-gray-100 transition-all">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->clave }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->zona_cliente }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->tipo_cliente }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->nombre }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->rfc }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $socio->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs font-semibold rounded-full {{ $socio->estatus == 'Activo' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $socio->estatus }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                        <a href="{{ route('socios.edit', $socio->id) }}" class="text-blue-900 hover:text-blue-600">Editar</a>
                        <form action="{{ route('socios.destroy', $socio->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Eliminar este socio?')" class="text-red-600 hover:text-red-900">Eliminar</button>
                        </form>
                        <a href="{{ route('socios.generarQR', $socio->id) }}" class="text-blue-600 hover:text-blue-900">Generar QR</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
