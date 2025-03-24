@php
    use Illuminate\Support\Facades\Route;
@endphp

<x-guest-layout>
    <!-- Navbar -->
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
            <a class="flex items-center space-x-8 rtl:space-x-reverse">
                <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
                <span class="self-center text-4xl font-semibold whitespace-nowrap font-sans">Canaco</span>
            </a>
        </div>
    </nav>

    <!-- Espaciado para evitar que el navbar tape el contenido -->
    <div class="pt-24 flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
            <!-- Logo -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('imagenes/canaco.png') }}" alt="Logo" class="w-24 h-24">
            </div>
            
            <h2 class="text-2xl font-semibold text-center text-blue-900 mb-6">Recuperar Contraseña</h2>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Correo Electrónico') }}" class="text-lg font-semibold mt-10 text-blue-900 mb-2" />
                    <x-input id="email" class="block mt-1 w-full border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-500 focus:ring-opacity-50 rounded-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-6 flex justify-center">
                    <x-button class="w-50 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-6 rounded-lg text-center">
                        {{ __('Enviar enlace de recuperación') }}
                    </x-button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="text-blue-700 font-semibold hover:underline">
                    Volver al inicio de sesión
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
