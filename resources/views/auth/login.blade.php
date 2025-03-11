<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canaco Servytur</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
    <!-- Logo -->
    <a class="flex items-center space-x-8 rtl:space-x-reverse">
      <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
      <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white font-sans">Canaco</span>
    </a>

    <!-- Botón hamburguesa (solo en móviles) -->
    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Abrir menú</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>

    <!-- Menú de navegación -->
    <div id="navbar-menu" class="hidden w-full md:flex md:w-auto">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="http://127.0.0.1:8000/" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">
            Inicio
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.getElementById("menu-toggle");
      const navbarMenu = document.getElementById("navbar-menu");

      menuToggle.addEventListener("click", function () {
          navbarMenu.classList.toggle("hidden");
      });

      document.querySelectorAll("#navbar-menu a").forEach(link => {
          link.addEventListener("click", () => {
              navbarMenu.classList.add("hidden");
          });
      });
  });
</script>

    <div class="min-h-screen flex mt-10 items-center justify-center">
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
