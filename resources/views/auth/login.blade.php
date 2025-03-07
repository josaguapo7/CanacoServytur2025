<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canaco Servytur</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg border border-gray-200">

            <h2 class="text-3xl font-bold text-center text-[#003366] mb-10">Iniciar Sesión</h2>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" class="text-[#003366] mb-2 mt-5 font-semibold"/>
                    <x-text-input id="email" class="block mb-10 w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-[#00509E] focus:border-[#00509E]" 
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-[#003366]" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" class="text-[#003366] mb-2 mt-5 font-semibold" />
                    <x-text-input id="password" class="block mb-10 w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-[#00509E] focus:border-[#00509E]" 
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-[#003366]" />
                </div>

                <div class="flex items-center mt-4">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#003366] shadow-sm focus:ring-[#00509E]" name="remember">
                    <label for="remember_me" class="ms-2 text-sm text-gray-700"> {{ __('Recordarme') }}</label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (\Illuminate\Support\Facades\Route::has('password.request'))
                        <a class="text-sm text-[#00509E] hover:underline" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    <x-primary-button class="bg-[#003366] text-white px-4 py-2 rounded-lg hover:bg-[#00509E] transition">
                        {{ __('Iniciar sesión') }}
                    </x-primary-button>
                </div>
            </form>

            <div class="text-center mt-6">
                <a href="{{ route('register') }}" class="text-[#003366] font-semibold hover:underline">¿No tienes cuenta? Regístrate aquí</a>
            </div>
        </div>
    </div>
</body>
</html>
