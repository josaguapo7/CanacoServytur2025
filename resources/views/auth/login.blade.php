@extends('layouts.app')
    <title>Canaco Servytur San Cristobal</title>
        <link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-2xl overflow-hidden w-full max-w-4xl grid grid-cols-1 md:grid-cols-2">
        <div class="p-10 flex flex-col items-center">

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
                <center><a href="/register" style="display: inline-block; padding: 10px 20px; background-color: #ffffff; color: rgb(0, 0, 0); text-decoration: none; border-radius: 5px;">
                    Regístrate
                </a></center>

            </form>
        </div>
        <div class="hidden w-full md:block">
            <img src="{{ asset('imagenes/center.jpg') }}"
                alt="Login Illustration"
                class="w-full h-full object-cover">
        </div>
    </div>
</div>
@endsection
