@php
    use Illuminate\Support\Facades\Route;
@endphp

<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-200 p-6">
        <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">

            <!-- Encabezado -->
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-blue-900">Inicio de Sesión</h2>
            </div>

            <x-validation-errors class="mb-4" />

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <!-- Formulario de inicio de sesión -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" class="text-blue-900 mt-5 font-semibold"/>
                    <x-input id="email" class="block mt-1 w-full border-gray-300 mb-10 focus:border-blue-700 focus:ring focus:ring-blue-500 focus:ring-opacity-50 rounded-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Contraseña') }}" class="text-blue-900 font-semibold"/>
                    <x-input id="password" class="block mt-1 w-full border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-500 focus:ring-opacity-50 rounded-lg" type="password" name="password" required autocomplete="current-password" />
                </div>

                <!-- Enlace para recuperar contraseña -->
                <div class="flex justify-between items-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-700 hover:underline" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>

                <!-- Botón de inicio de sesión -->
        <div class="mt-12 flex justify-center">
            <x-button class="w-50 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-6 rounded-lg text-center">
                {{ __('Iniciar Sesión') }}
            </x-button>
        </div>
                <!-- Botón para registrarse -->
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
