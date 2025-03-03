@extends('layouts.app')

@section('content')
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
    <a class="flex items-center space-x-8 rtl:space-x-reverse">
      <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
      <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white font-sans">Canaco</span>
    </a>

    <!-- Botón menú hamburguesa -->
    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>

    <!-- Menú de navegación con botón al final -->
    <div class="hidden md:flex md:w-auto md:order-1 items-center">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      
      <a href="{{ route('login') }}" class="ml-10 px-4 py-2 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-all shadow-md">
        Regresar
      </a>
    </div>
  </div>
</nav>

<!-- Script para manejar la visibilidad del menú en móviles -->
<script>
  document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("navbar-sticky").classList.toggle("hidden");
  });
</script>
<br><br><br><br><br><br>
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-6">Registro</h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="mb-4">
                <label for="empresa" class="block text-sm font-semibold text-blue-900">Nombre de la Empresa</label>
                <input type="text" name="empresa" class="w-full p-3 border border-blue-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-semibold text-blue-900">Nombre Completo</label>
                <input type="text" name="nombre" class="w-full p-3 border border-blue-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-blue-900">Correo Electrónico</label>
                <input type="email" name="email" class="w-full p-3 border border-blue-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-semibold text-blue-900">Número de Teléfono</label>
                <input type="text" name="telefono" class="w-full p-3 border border-blue-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="rfc" class="block text-sm font-semibold text-blue-900">RFC</label>
                <input type="text" name="rfc" class="w-full p-3 border border-blue-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-blue-900">Contraseña</label>
                <input type="password" name="password" class="w-full p-3 border border-blue-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-semibold text-blue-900">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" class="w-full p-3 border border-blue-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-lg hover:bg-blue-800 transition">
                Registrar
            </button>
        </form>
    </div>
</div>

@endsection
