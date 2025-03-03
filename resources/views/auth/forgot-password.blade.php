@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-10 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6">Recuperar Contraseña</h2>

        @if (session('status'))
            <div class="bg-green-100 text-green-700 p-4 mb-4 rounded">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <label class="block mb-2 text-sm text-gray-700">Correo Electrónico</label>
            <input type="email" name="email" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500">

            @error('email')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

            <button type="submit" class="w-full bg-blue-900 text-white p-3 mt-4 rounded-lg hover:bg-blue-700 transition">
                Enviar Enlace de Recuperación
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="text-blue-900 hover:underline">Volver al inicio de sesión</a>
        </div>
    </div>
</div>
@endsection
