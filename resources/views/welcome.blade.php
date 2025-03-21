<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Canaco Servytur San Cristobal</title>
        <link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>

<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
    <a class="flex items-center space-x-8 rtl:space-x-reverse">
      <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
      <span class="self-center text-4xl font-semibold whitespace-nowrap font-sans">Canaco</span>
    </a>
    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>
    <div class="hidden md:flex md:w-auto md:order-1 items-center">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
        <li>
          <a href="sobrenosotros" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">Sobre nosotros</a>
        </li>
        <li>
          <a href="afiliarte" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">¿Quieres afiliarte?</a>
        </li>
        <li>
          <a href="servicios" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">Nuestros Servicios</a>
        </li>
        <li>
          <a href="#contacto" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">Contáctanos</a>
        </li>
      </ul>
      <a href="{{ route('login') }}" class="ml-10 px-4 py-2 text-white bg-blue-900 rounded-lg hover:bg-blue-700 transition-all shadow-md">
        Acceder
      </a>
    </div>
  </div>
</nav>

<!-- Script corregido -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.getElementById("menu-toggle");
      const navbarMenu = document.getElementById("navbar-sticky");

      menuToggle.addEventListener("click", function () {
          navbarMenu.classList.toggle("hidden");
      });

      // Cerrar el menú al hacer clic en un enlace en móviles
      document.querySelectorAll("#navbar-sticky a").forEach(link => {
          link.addEventListener("click", () => {
              navbarMenu.classList.add("hidden");
          });
      });
  });
</script>

<section class="relative w-full h-[500px] md:h-[600px] lg:h-[700px] bg-gray-900 text-white flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-60" style="background-image: url('https://www.monitoratec.com.br/blog/wp-content/uploads/2020/12/AdobeStock_332234118-min-740x416.jpeg');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 to-transparent"></div>
    <div class="relative z-10 text-center max-w-2xl px-6">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight drop-shadow-lg">
            Impulsamos el crecimiento de tu negocio
        </h1>
        <p class="mt-4 text-lg md:text-xl lg:text-2xl drop-shadow-md">
            Únete a CANACO y accede a beneficios exclusivos.
        </p>
        <a href="afiliarte" class="mt-6 inline-block bg-blue-900 hover:bg-blue-500
         text-white font-semibold py-3 px-6 md:py-4 md:px-8 lg:py-5 lg:px-10 rounded-lg shadow-lg transition-all transform hover:scale-105">
            Afíliate ahora
        </a>
    </div>
</section>
<a href="#" class="flex flex-col md:flex-row items-center bg-white border border-gray-300 rounded-lg shadow-lg max-w-5xl hover:shadow-xl transition-all duration-300 mx-auto mt-20 mb-10">
    <div class="w-full md:w-1/2 h-72 md:h-auto overflow-hidden rounded-t-lg md:rounded-l-lg">
        <img class="object-cover w-full h-full" src="{{ asset('imagenes/canaco camara.jpeg') }}">
    </div>
    <div class="flex flex-col justify-between p-6 leading-relaxed w-full md:w-1/2">
        <h5 class="mb-4 text-3xl font-extrabold tracking-wide text-gray-900">
            CANACO SERVYTUR &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  SAN CRISTOBAL DE LAS CASAS
        </h5>
        <p class="mb-4 text-justify text-xl text-gray-600">
            La misión de Canaco Servytur SCLC es representar, defender y promover los intereses legítimos del comercio, los servicios y el turismo, ante las autoridades municipales, estatales y federales.
        </p>
    </div>
</a>
<section class="bg-gradient-to-b from-white to-blue-50 py-16">
  <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-16 text-center">
    <div class="mb-15">
      <h2 class="text-3xl sm:text-4xl font-extrabold text-black">Nuestro Impacto en el Comercio Local</h2>
      <p class="text-black mt-5">Resultados que nos respaldan: Creciendo juntos cada día</p>
      <div class="w-24 h-1 bg-blue-900 mx-auto mt-3 rounded"></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-10 mb-10 gap-8 text-center">
      <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center justify-center text-center">
        <img src="{{ asset('imagenes/edificio.png') }}" alt="Icono de edificio" class="w-20 h-20 mb-4">
        <h2 class="text-4xl mt-4 font-extrabold">+350</h2>
        <p class="text-lg mt-2">Negocios afiliados</p>
      </div>
      <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center justify-center text-center">
        <img src="{{ asset('imagenes/reloj.png') }}" alt="reloj icono" class="w-20 h-20 mb-4">
        <h2 class="text-4xl mt-4 font-extrabold">+100 años</h2>
        <p class="text-lg mt-2">Apoyando al comercio local</p>
      </div>
      <div class="bg-white text-black p-6 rounded-lg shadow-lg flex flex-col items-center justify-center text-center">
        <img src="{{ asset('imagenes/curso.png') }}" alt="curso icono" class="w-20 h-20 mb-4">
        <h2 class="text-4xl mt-4 font-extrabold">+50</h2>
        <p class="text-lg mt-2">Eventos y capacitaciones</p>
      </div>
    </div>
    <div class="mt-10">
      <a href="afiliarte" class="bg-blue-900 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-800 transition">¡Quiero ser parte!</a>
    </div>
  </div>
</section>

<center><h3 class="text-gray-500 text-xl font-family: 'Poppins', sans-serif; mt-20 mb-5">HAZ TU ELECCIÓN</h3></center>
<center><h1 class="text-4xl font-extrabold font-[Bebas_Neue] uppercase tracking-widest">Lista de Precios del SIEM</h1></center>

<div class="grid grid-cols-1 md:grid-cols-2 mt-10 lg:grid-cols-3 gap-6 p-6">
    <div class="bg-gradient-to-br from-white to-blue-200 text-blue-900 p-6 rounded-lg shadow-lg text-center">
        <h3 class="text-xl font-bold">0 - 2 empleados</h3>
        <p class="text-lg mt-2">Cámara: <strong>$1,100.00</strong></p>
        <p class="text-lg">SIEM: <strong>$100.00</strong></p>
        <p class="text-2xl font-bold mt-2">Total: $1,200.00</p>
        <a href="afiliarte" class="inline-block mt-4 px-4 py-2 bg-blue-900 text-white font-bold rounded-md transition-all duration-300 ease-in-out transform hover:bg-blue-700 hover:scale-105 hover:opacity-90">
            Más Información
        </a>
    </div>
    <div class="bg-gradient-to-br from-blue-900 to-blue-700 text-white p-6 rounded-lg shadow-lg text-center">
        <h3 class="text-xl font-bold">3 empleados</h3>
        <p class="text-lg mt-2">Cámara: <strong>$1,550.00</strong></p>
        <p class="text-lg">SIEM: <strong>$300.00</strong></p>
        <p class="text-2xl font-bold mt-2">Total: $1,850.00</p>
        <a href="afiliarte" class="inline-block mt-4 px-4 py-2 bg-white text-blue-900 font-bold rounded-md transition-all duration-300 ease-in-out transform hover:bg-gray-200 hover:scale-105 hover:opacity-90">
            Más Información
        </a>
    </div>
    <div class="bg-gradient-to-br from-white to-blue-200 text-blue-900 p-6 rounded-lg shadow-lg text-center">
        <h3 class="text-xl font-bold">4 - 10 empleados</h3>
        <p class="text-lg mt-2">Cámara: <strong>$1,910.00</strong></p>
        <p class="text-lg">SIEM: <strong>$640.00</strong></p>
        <p class="text-2xl font-bold mt-2">Total: $2,550.00</p>
        <a href="afiliarte" class="inline-block mt-4 px-4 py-2 bg-blue-900 text-white font-bold rounded-md transition-all duration-300 ease-in-out transform hover:bg-blue-700 hover:scale-105 hover:opacity-90">
            Más Información
        </a>
    </div>
</div>
<div class="relative flex flex-col md:flex-row w-full my-6 bg-white mt-32 shadow-sm border border-slate-200 rounded-lg">
    <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
        <img
            src="{{ asset('imagenes/fachada.jpeg') }}"
            alt="card-image"
            class="h-full w-full rounded-md md:rounded-lg object-cover"
        />
    </div>
    <div class="p-6 flex flex-col justify-between w-full">
        <div>

            <center><h3 class="mb-2 text-slate-800 text-xl font-semibold">

            </h3>
            </h3></center>
        </div>
        <div class="w-full h-64 rounded-lg overflow-hidden shadow-md my-4">
            <iframe
                class="w-full h-full border-0"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.9941938385396!2d-92.64190912614873!3d16.727141521492175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed4515547feb2b%3A0xb009eb6939abb824!2sCanaco!5e0!3m2!1sen!2smx!4v1740270324398!5m2!1sen!2smx"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div>
            <a href="https://maps.app.goo.gl/P2pUvj2tQCEECdun7"
            target="_blank"
               class="text-teal-600 font-semibold text-sm hover:underline flex items-center">
                Cómo llegar
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</div>

<div id="contacto" class="max-w-1xl mt-10 mx-auto p-1 md:p-6"> 
    <div class="grid md:grid-cols-2 gap-8 items-start mt-20">
        <div class="bg-gray-50 rounded-lg p-6">
            <h2 class="text-3xl font-bold text-indigo-900 mb-4">CANACO SERVYTUR</h2>
            <p class="text-gray-600 mb-8 text-sm">¿Tienes dudas o quieres afiliarte? Contáctanos y con gusto te atenderemos.</p>
            <form action="{{ route('enviar.formulario') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <input type="text" name="nombre" placeholder="Nombre" required class="w-full p-3 rounded-lg bg-white border text-sm border-gray-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none" />
                    <input type="email" name="email" placeholder="E-mail" required class="w-full p-3 rounded-lg bg-white border text-sm border-gray-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none" />
                    <textarea name="mensaje" placeholder="Mensaje" required rows="4" class="w-full p-3 rounded-lg bg-white border text-sm border-gray-200 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none resize-none"></textarea>
                    <button type="submit" class="w-full text-sm bg-blue-700 hover:bg-blue-900 text-white font-semibold py-3 px-6 rounded-lg transition-colors">Enviar</button>
                </div>
            </form>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-lg p-6 shadow">
                <h3 class="text-xl font-semibold text-indigo-900 mb-6">Información de Contacto</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-900" viewBox="0 0 64 64">
                            <path d="M32 0A24.032 24.032 0 0 0 8 24c0 17.23 22.36 38.81 23.31 39.72a.99.99 0 0 0 1.38 0C33.64 62.81 56 41.23 56 24A24.032 24.032 0 0 0 32 0zm0 35a11 11 0 1 1 11-11 11.007 11.007 0 0 1-11 11z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm mb-1">Nuestra ubicación</h4>
                            <p class="text-gray-600 text-sm">Crescencio Rosas 61, Barrio de San Diego</p>
                            <p class="text-gray-600 text-sm">29270 San Cristóbal de las Casas, Chis.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-900" viewBox="0 0 513.64 513.64">
                            <path d="m499.66 376.96-71.68-71.68c-25.6-25.6-69.12-15.359-79.36 17.92-7.68 23.041-33.28 35.841-56.32 30.72-51.2-12.8-120.32-79.36-133.12-133.12-7.68-23.041 7.68-48.641 30.72-56.32 33.28-10.24 43.52-53.76 17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12 0L18.38 62.08c-48.64 51.2 5.12 186.88 125.44 307.2s256 176.641 307.2 125.44l48.64-48.64c17.921-20.48 17.921-51.2 0-69.12z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm mb-1">Teléfono</h4>
                            <p class="text-gray-600 text-sm">967 678 07 67</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-indigo-900" viewBox="0 0 512 512">
                            <path d="M298.789 313.693c-12.738 8.492-27.534 12.981-42.789 12.981-15.254 0-30.05-4.489-42.788-12.981L3.409 173.82A76.269 76.269 0 0 1 0 171.403V400.6c0 26.278 21.325 47.133 47.133 47.133h417.733c26.278 0 47.133-21.325 47.133-47.133V171.402a75.21 75.21 0 0 1-3.416 2.422z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-sm mb-1">Email</h4>
                            <p class="text-gray-600 text-sm">Canacoservytur@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg p-6 shadow">
                <h3 class="text-xl font-semibold text-indigo-900 mb-6">Horario de Atención</h3>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Lunes - Viernes</span>
                        <span class="text-gray-800 text-sm">9:00 AM - 7:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Sábado</span>
                        <span class="text-gray-800 text-sm">9:00 AM - 12:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600 text-sm">Domingo</span>
                        <span class="text-gray-800 text-sm">Cerrado</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-16 pb-7 px-2 w-full">
    <div class="w-full px-4 lg:px-12 p-12 rounded-2xl bg-neutral-100">
      <div class="flex flex-col min-[830px]:flex-row items-center justify-between gap-6 pb-10 border-b-2 border-gray-200">
        <a href="https://pagedone.io/" class="py-1.5">
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