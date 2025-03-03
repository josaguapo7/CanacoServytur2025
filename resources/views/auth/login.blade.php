@extends('layouts.app')
    <title>Canaco Servytur San Cristobal</title>
    <link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">
@section('content')
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
    <a class="flex items-center space-x-8 rtl:space-x-reverse">
      <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white font-sans text-blue-900">Canaco</span>
    </a>
    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div class="hidden md:flex md:w-auto md:order-1 items-center">
      <a href="http://127.0.0.1:8000/" class="ml-10 px-4 py-2 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-all shadow-md">
        Regresar
      </a>
    </div>
  </div>
</nav>

<script>
  document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("navbar-sticky").classList.toggle("hidden");
  });
</script>

<div class="min-h-screen mt-8 flex items-center justify-center bg-gray-100 p-6">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden w-full max-w-lg p-10">
        <h2 class="text-3xl font-bold text-blue-900 text-center mb-5">Inicia sesión</h2>
        <form method="POST" action="{{ route('login') }}" class="space-y-4 w-full">
            @csrf
            <div class="relative">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required class="mt-3 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <span class="absolute right-3 top-10 text-gray-400"><i class="fas fa-envelope"></i></span>
            </div>
            <br>
            <div class="relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" name="password" id="password" required class="mt-3 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <span class="absolute right-3 top-10 text-gray-400"><i class="fas fa-eye"></i></span>
            </div>
            <br>
            <div class="text-right mt-10">
                <a href="{{ route('password.request') }}" class="text-blue-900 font-medium hover:underline">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit" class="w-full mt-8 bg-blue-900 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all shadow-lg">
                Acceder
            </button>
            <div class="text-center mt-4">
                <a href="/register" class="text-blue-900 font-medium hover:underline">Regístrate</a>
            </div>
        </form>
    </div>
</div>
