<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Dudas</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="color: #333;"> Nuevo Mensaje de Contacto 📩</h2>
        <p><strong>Mensaje de:</strong> {{ $datos['nombre'] }}</p>
        <p><strong>Correo:</strong> <a href="mailto:{{ $datos['email'] }}">{{ $datos['email'] }}</a></p>
        <p><strong>Descripción:</strong></p>
        <p>{{ $datos['mensaje'] }}</p>
        <br>
        <br>
        <p class="text-gray-500 dark:text-gray-400">
            Este correo fue enviado de : <a href="mailto:{{ $datos['email'] }}" class="text-blue-600 hover:underline dark:text-blue-400">{{ $datos['email'] }}</a>.

            <p class="mt-3 text-gray-500 dark:text-gray-400">© {{ date('Y') }} Canaco Servytur San Cristobal de las Casas, Chiaspas  Todos los derechos reservados.</p>
    </div>


</body>
</html>
