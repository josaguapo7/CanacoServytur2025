<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-white">
        <div class="w-full max-w-md p-8 bg-white border border-gray-200 rounded-lg shadow-lg">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <h2 class="text-2xl font-semibold text-center text-blue-900 mb-6">Iniciar Sesión</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" class="text-blue-900 font-semibold"/>
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Contraseña')" class="text-blue-900 font-semibold" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>
                <div class="flex items-center mt-4">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                    <label for="remember_me" class="ms-2 text-sm text-gray-700"> {{ __('Recordarme') }}</label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (\Illuminate\Support\Facades\Route::has('password.request'))
                        <a class="text-sm text-blue-700 hover:underline" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif

                    <x-primary-button class="bg-blue-900 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition">
                        {{ __('Iniciar sesión') }}
                    </x-primary-button>
                </div>

            </form>
            
            <!-- Botón de Registro -->
            <div class="text-center mt-6">
                <a href="{{ route('register') }}" class="text-blue-900 font-semibold hover:underline">¿No tienes cuenta? Regístrate aquí</a>
            </div>
        </div>
    </div>
</x-guest-layout>