@php
    use Illuminate\Support\Facades\Route;
@endphp

<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-white">
        <div class="w-full max-w-md p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <h2 class="text-2xl font-semibold text-center text-blue-900 mb-6">Iniciar Sesión</h2>

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
