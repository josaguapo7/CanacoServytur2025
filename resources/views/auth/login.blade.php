@php
    use Illuminate\Support\Facades\Route;
@endphp
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Canaco Servytur San Cristobal</title>
        <link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
            <!-- Logo -->
            <a class="flex items-center space-x-8 rtl:space-x-reverse">
                <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
                <span class="self-center text-4xl font-semibold whitespace-nowrap font-sans">Canaco</span>
            </a>

            <!-- Menú centrado -->
            <div class="hidden md:flex flex-grow justify-end">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="http://127.0.0.1:8000/" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 hover:text-blue-700 hover:text-xl transition-all duration-300">
                            Inicio
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Botón de menú hamburguesa en móviles -->
            <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Script para manejar la visibilidad del menú en móviles -->
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("navbar-sticky").classList.toggle("hidden");
        });
    </script>

<x-guest-layout>
    <div class="flex items-center mt-24 justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
            <!-- Logo -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('imagenes/canaco.png') }}" alt="Logo" class="w-16 h-16">
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <h2 class="text-2xl font-semibold text-center text-blue-900 mb-6">Iniciar Sesión</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" class="text-blue-900 mt-5 font-semibold !important"/>
                    <x-input id="email" class="block mt-1 w-full border-gray-300 mb-10 focus:border-blue-700 focus:ring focus:ring-blue-500 focus:ring-opacity-50 rounded-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Contraseña') }}" class="text-blue-900 font-semibold"/>
                    <x-input id="password" class="block mt-1 w-full border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-500 focus:ring-opacity-50 rounded-lg" type="password" name="password" required autocomplete="current-password" />
                </div>

                
                <div class="flex justify-between items-center mt-4">
                    <button type="button" class="text-sm text-blue-700 hover:underline" onclick="window.location.href='{{ route('password.email') }}'">
                        {{ __('Recuperar contraseña') }}
                    </button>
                </div>

            
                <div class="mt-12 flex justify-center">
                    <x-button class="w-50 bg-blue-500 hover:bg-blue-400 text-white font-bold mb-5 py-2 px-6 rounded-lg text-center">
                        {{ __('Iniciar Sesión') }}
                    </x-button>
                </div>

                
                <div class="mt-4 text-center">
                    <span class="text-gray-600">¿No tienes cuenta?</span>
                    <a href="{{ route('register') }}" class="text-blue-700 font-semibold hover:underline">
                        Regístrate aquí
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

<section class="pt-16 pb-7 px-2 w-full">
    <div class="w-full px-4 lg:px-12 p-12 rounded-2xl bg-neutral-100">
      <div class="flex flex-col min-[830px]:flex-row items-center justify-between gap-6 pb-10 border-b-2 border-gray-200">
        <a href="https://pagedone.io/" class="py-1.5">
        </a>
        <nav class="flex flex-wrap justify-center space-x-4 text-gray-600">
        <a href="http://127.0.0.1:8000/" class="hover:text-gray-900">Inicio</a>
          <a href="sobrenosotros" class="hover:text-gray-900">Sobre Nosotros</a>
          <a href="afiliarte" class="hover:text-gray-900">Quieres Afiliarte</a>
          <a href="#" class="hover:text-gray-900">Nuestros Servicios</a>
          <a href="#contacto" class="hover:text-gray-900">Contacto</a>
        </nav>
      </div>
      <div class="flex flex-col sm:flex-row justify-between items-center mt-6 text-gray-500 text-sm">
        <p>CANACO 2025 Todos los derechos reservados.</p>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-900">Privacidad</a>
          <a href="#" class="hover:text-gray-900">Términos</a>
        </div>
      </div>
    </div>
</section>
