<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canaco Servytur </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg border border-gray-200">
            <h2 class="text-3xl font-bold text-center text-[#003366] mb-6">Recuperar Contraseña</h2>

            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
                {{ __('¿Olvidaste tu contraseña? Ingresa tu correo y te enviaremos un enlace para restablecerla.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-[#003366] mb-5 font-semibold" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-[#00509E] focus:border-[#00509E]" 
                        type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-[#003366]" />
                </div>

                <div class="flex items-center justify-between mt-10">
                    <a class="text-sm text-[#00509E] hover:underline" href="{{ route('login') }}">
                        {{ __('Regresar') }}
                    </a>
                    <x-primary-button class="bg-[#003366] text-white px-4 py-2 rounded-lg hover:bg-[#00509E] transition">
                        {{ __('Enviar enlace de recuperación') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>