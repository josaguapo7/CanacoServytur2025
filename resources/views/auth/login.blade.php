@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-full max-w-4xl grid grid-cols-1 md:grid-cols-2">
        <!-- Sección del formulario -->
        <div class="p-10 flex flex-col items-center">
            
            <!-- Imagen de perfil circular -->
            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-5">
                <img src="{{ asset('imagenes/canaco.jpg') }}" alt="User Avatar" class="w-full h-full object-cover">
            </div>

            <h2 class="text-3xl font-bold text-gray-800 text-center mb-5">Inicia sesión</h2>

            <form method="POST" action="{{ route('login') }}" class="space-y-4 mt-6 w-full">
                @csrf

                <div class="relative">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <span class="absolute right-3 top-10 text-gray-400"><i class="fas fa-envelope"></i></span>
                </div>

                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <span class="absolute right-3 top-10 text-gray-400"><i class="fas fa-eye"></i></span>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-900 transition-all shadow-lg">
                    Acceder
                </button>
            </form>
        </div>

        <!-- Sección de la imagen -->
        <div class="hidden w-full md:block bg-blue-900">
            <img src="https://icorp.com.mx/wp-content/uploads/2015/05/%C2%BFCuales-son-los-3-pilares-de-la-seguridad-informatica-scaled.webp" 
                alt="Login Illustration" 
                class="w-full h-full object-cover">
        </div>
    </div>
</div>
@endsection
