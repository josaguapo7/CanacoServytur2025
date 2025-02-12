<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Socios</title>
</head>
<body>

    <h1>Subir Lista de Socios</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('socios.importar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="archivo" required>
        <button type="submit">Subir Archivo</button>
    </form>

    <h2>Lista de Socios</h2>

    @if($socios->count() > 0)
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
            @foreach($socios as $socio)
                <tr>
                    <td>{{ $socio->id }}</td>
                    <td>{{ $socio->nombre }}</td>
                    <td>{{ $socio->email }}</td>
                    <td>{{ $socio->telefono }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No hay socios registrados.</p>
    @endif

</body>
</html>
