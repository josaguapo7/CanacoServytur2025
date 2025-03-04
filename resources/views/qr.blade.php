<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Canaco Servytur San Cristobal</title>
        <link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>/*! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246/.5);--tw-shadow:0 0 #0000}*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content:""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;margin:0;padding:0}button{background-color:transparent;background-image:none}img,svg,video,canvas,audio,iframe{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}.absolute{position:absolute}.relative{position:relative}.top-0{top:0}.z-0{z-index:0}.flex{display:flex}.grid{display:grid}.hidden{display:none}.w-full{width:100%}.max-w-2xl{max-width:42rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.justify-center{justify-content:center}.items-center{align-items:center}.gap-4{gap:1rem}.overflow-hidden{overflow:hidden}.rounded-lg{border-radius:.5rem}.border{border-width:1px}.border-gray-300{border-color:rgb(209 213 219/1)}.bg-gray-50{background-color:rgb(249 250 251/1)}.bg-white{background-color:rgb(255 255 255/1)}.p-6{padding:1.5rem}.px-4{padding-left:1rem;padding-right:1rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.text-center{text-align:center}.text-sm{font-size:.875rem;line-height:1.25rem}.text-white{color:rgb(255 255 255/1)}.shadow-sm{box-shadow:0 1px 2px 0 rgb(0 0 0/.05)}.ring-1{box-shadow:0 0 0 1px var(--tw-ring-color)}</style>
        @endif
    </head>

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
    <!-- Logo -->
    <a class="flex items-center space-x-8 rtl:space-x-reverse">
      <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
      <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white font-sans">Canaco</span>
    </a>

    <!-- Menú centrado -->
    <div class="hidden md:flex flex-grow justify-center">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      </ul>
    </div>

    <!-- Botón de menú hamburguesa en móviles -->
    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
  </div>
</nav>
<!-- Script para manejar la visibilidad del menú en móviles -->
<script>
  document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("navbar-sticky").classList.toggle("hidden");
  });
</script>

<br><br><br>

<div class="flex justify-center items-center min-h-screen bg-gray-200">
    <div class="max-w-2xl w-full bg-white shadow-lg rounded-lg overflow-hidden border border-gray-300 flex">
        <div class="w-1/2 flex items-center justify-center">
            <div class="w-full h-full">
                <img src="{{ asset('imagenes/fachada.jpeg') }}" alt="Imagen del negocio" class="h-full w-full object-cover">
            </div>
        </div>
        <div class="w-1/2 p-6 flex flex-col justify-between">
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Información del Usuario</h2>
                <p class="mt-2 text-sm text-gray-700"><span class="font-semibold">Usuario:</span><br> ABASTOS Y SUPLEMENTOS AGROPECUARIOS DEL SURESTE, S.A DE CV</p>
                <p class="mt-2 text-lg font-semibold">Estatus: <span class="text-green-600">Activo</span></p>
                <p class="mt-2 text-sm text-gray-600">Este establecimiento pertenece a la Cámara Nacional del Comercio de SC</p>
            </div>
            <div class="mt-4 flex justify-center">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=example" alt="QR Code" class="h-24 w-24">
            </div>
        </div>
    </div>
</div>

<section class="pt-16 pb-7 px-2 w-full">
    <div class="w-full px-4 lg:px-12 p-12 rounded-2xl bg-neutral-100">
      <div class="flex flex-col min-[830px]:flex-row items-center justify-between gap-6 pb-10 border-b-2 border-gray-200">
        <a href="https://pagedone.io/" class="py-1.5">
          <!-- SVG Logo -->
        </a>
        <nav class="flex flex-wrap justify-center space-x-4 text-gray-600">
        <a href="http://127.0.0.1:8000/" class="hover:text-gray-900">Inicio</a>
          <a href="sobrenosotros" class="hover:text-gray-900">Sobre Nosotros</a>
          <a href="afiliarte" class="hover:text-gray-900">Quieres Afiliarte</a>
          <a href="#" class="hover:text-gray-900">Nuestros Servicios</a>
          <a href="#contacto" class="hover:text-gray-900">Contacto</a>
        </nav>
      </div>
      <div class="flex flex-col sm:flex-row justify-between items-center mt-6 text-gray-500 text-sm">
        <p>CANACO 2025 Todos los derechos reservados.</p>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-900">Privacidad</a>
          <a href="#" class="hover:text-gray-900">Términos</a>
        </div>
      </div>
    </div>
</section>