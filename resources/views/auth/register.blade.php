<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Mi Proyecto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg border border-gray-200">

            <h2 class="text-3xl font-bold text-center text-[#003366] mb-6">Registro</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div>
                    <x-input-label for="name" :value="__('Nombre')" class="text-[#003366] font-semibold"/>
                    <x-text-input id="name" class="block mt-1 w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-[#00509E] focus:border-[#00509E]" 
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="Nombre" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-[#003366]" />
                </div>

                <!-- Contraseña -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" class="text-[#003366] font-semibold" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-[#00509E] focus:border-[#00509E]" 
                        type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-[#003366]" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" class="text-[#003366] font-semibold" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 rounded-lg px-3 py-2 focus:ring-[#00509E] focus:border-[#00509E]" 
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-[#003366]" />
                </div>

                <!-- Aceptar Términos -->
                <div class="flex items-center mt-6">
                    <input type="checkbox" id="terms" class="mr-2 rounded border-gray-300 text-[#003366] shadow-sm focus:ring-[#00509E]">
                    <label for="terms" class="text-gray-700">
                        Acepto los <a href="#" class="text-[#00509E] underline">términos y condiciones</a>
                    </label>
                </div>

                <!-- Botones -->
                <div class="flex items-center justify-between mt-4">
                    <a class="text-sm text-[#00509E] hover:underline" href="{{ route('login') }}">
                        {{ __('¿Ya estás registrado?') }}
                    </a>

                    <x-primary-button class="bg-[#003366] text-white px-4 py-2 rounded-lg hover:bg-[#00509E] transition">
                        {{ __('Registrarse') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
