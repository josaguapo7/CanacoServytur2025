    {{-- <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Socios</title>
    </head>
    <body>

        <h1>Subir Lista de Socios</h1>

        @if(session('success'))
            <p style="color: rgb(0, 255, 0);">{{ session('success') }}</p>
        @endif

        <form action="{{ route('socios.importar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="archivo" required>
            <button type="submit">Subir Archivo</button>
        </form>

        <h2>Lista de Socios</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Zona del Cliente</th>
                <th>Tipo de Cliente</th>
                <th>Nombre</th>
                <th>rfc</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Código QR</th>
            </tr>
            @foreach($Socios as $socio)
                <tr>
                    <td>{{ $socio->id }}</td>
                    <td>{{ $socio->zona_cliente }}</td> <!-- Cambio aquí -->
                    <td>{{ $socio->tipo_cliente }}</td> <!-- Cambio aquí -->
                    <td>{{ $socio->nombre }}</td>
                    <td>{{ $socio->rfc }}</td>
                    <td>{{ $socio->email }}</td>
                    <td>{{ $socio->telefono }}</td>
                    <td>{{ $socio->codigo_qr }}</td>
                </tr>
            @endforeach
        </table>

    </body>
    </html> --}}

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Socios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Subir Lista de Socios</h1>

        @if(session('success'))
            <p class="text-green-600">{{ session('success') }}</p>
        @endif

        <form action="{{ route('socios.importar') }}" method="POST" enctype="multipart/form-data" class="mb-6">
            @csrf
            <div class="flex items-center space-x-4">
                <input type="file" name="archivo" required class="border p-2 rounded w-full">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Subir Archivo</button>
            </div>
        </form>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="pb-4 bg-white">
                <label for="table-search" class="sr-only">Buscar</label>
                <div class="relative mt-1">
                    <input type="text" id="table-search" class="block w-80 p-2 pl-10 text-sm border rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar socios...">
                </div>
            </div>

            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Zona del Cliente</th>
                        <th scope="col" class="px-6 py-3">Tipo de Cliente</th>
                        <th scope="col" class="px-6 py-3">Nombre</th>
                        <th scope="col" class="px-6 py-3">RFC</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Teléfono</th>
                        <th scope="col" class="px-6 py-3">Código QR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Socios as $socio)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $socio->id }}</td>
                            <td class="px-6 py-4">{{ $socio->zona_cliente }}</td>
                            <td class="px-6 py-4">{{ $socio->tipo_cliente }}</td>
                            <td class="px-6 py-4">{{ $socio->nombre }}</td>
                            <td class="px-6 py-4">{{ $socio->rfc }}</td>
                            <td class="px-6 py-4">{{ $socio->email }}</td>
                            <td class="px-6 py-4">{{ $socio->telefono }}</td>
                            <td class="px-6 py-4">{{ $socio->codigo_qr }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

