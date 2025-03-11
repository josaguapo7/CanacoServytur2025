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

    <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Abrir menú</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>

    <div id="navbar-sticky" class="hidden w-full md:flex md:w-auto md:justify-center">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="http://127.0.0.1:8000/" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">
            Inicio
          </a>
        </li>
        <li>
          <a href="afiliarte" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">
            ¿Quieres afiliarte?
          </a>
        </li>
        <li>
          <a href="servicios" class="block py-2 px-3 text-lg text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">
            Nuestros Servicios
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.getElementById("menu-toggle");
      const navbarMenu = document.getElementById("navbar-sticky");

      menuToggle.addEventListener("click", function () {
          navbarMenu.classList.toggle("hidden");
      });
      document.querySelectorAll("#navbar-sticky a").forEach(link => {
          link.addEventListener("click", () => {
              navbarMenu.classList.add("hidden");
          });
      });
  });
</script>

<div class="flex flex-col md:flex-row items-center justify-between bg-gray-100 px-8 mt-24 py-10 min-h-[70vh]">
    
    <!-- Texto a la izquierda -->
    <div class="max-w-lg text-white">
        <h1 class="text-4xl font-bold text-black leading-tight">
        Impulsando el Comercio, Servicios y el Turismo 
        </h1>
        <p class="text-gray-700  text-justify mt-4">
        En Canaco San Cristóbal, representamos y fortalecemos a los empresarios y comerciantes locales, promoviendo el crecimiento económico, la innovación y el desarrollo sostenible. ¡Únete a nuestra comunidad y haz crecer tu negocio!
        </p>
        
    </div>

    <!-- Sección con 9 círculos más grandes y distribuidos correctamente -->
    <div class="grid grid-cols-3 gap-6 mt-8 md:mt-0 relative w-1/2">
        @for ($i = 0; $i < 9; $i++)
            <div class="w-28 h-28 rounded-full overflow-hidden shadow-lg animate-float{{ $i % 3 }}">
                <img src="{{ asset('imagenes/canaco.png') }}" alt="User Avatar" class="w-full h-full object-cover">
            </div>
        @endfor
    </div>

</div>

<!-- Animaciones de los círculos con ajuste de posición -->
<style>
    @keyframes float1 {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-15px) translateX(10px); }
    }
    @keyframes float2 {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(20px) translateX(-10px); }
    }
    @keyframes float3 {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-10px) translateX(-15px); }
    }

    .animate-float0 { animation: float1 3.5s ease-in-out infinite; }
    .animate-float1 { animation: float2 4s ease-in-out infinite; }
    .animate-float2 { animation: float3 4.5s ease-in-out infinite; }
</style>
 

{{--<section class="bg-gray-100 py-12"> 
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-8">CANACO Representando al Comercio Local</h2>
        

        <div class="max-w-7xl flex flex-wrap md:flex-nowrap gap-6">
            <!-- Importancia de CANACO -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/2">
                <h3 class="text-2xl font-semibold mb-3 text-justify">Importancia de CANACO</h3>
                <p class="text-gray-800 text-justify text-md leading-relaxed">
                    La misión de CANACO Servytur SCLC es representar, defender y promover los intereses legítimos del comercio, los servicios y el turismo ante las autoridades Municipales, Estatales y Federales.
                    CANACO, además de defender y estar facultado por mandato de ley, según la Ley de Cámaras y sus Confederaciones, siempre abonará y propondrá una cultura de legalidad, justicia, paz, respeto, cordura, transparencia, responsabilidad social y lo más importante: EL BIENESTAR DE TODOS LOS QUE VIVIMOS EN SAN CRISTÓBAL DE LAS CASAS, EN CHIAPAS Y EN MÉXICO.
                   
                    En CANACO se tiene una premisa siempre anteponer el BIEN COMÚN a cualquier interés personal. Somos un órgano colegiado y tomamos decisiones en conjunto, y eso nos enriquece.
                </p>
            </div>

            <!-- Ámbito de Acción -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/2">
                <h3 class="text-2xl font-semibold mb-3 text-justify">Ámbito de Acción</h3>
                <p class="text-gray-800 text-md leading-relaxed text-justify">
                    CANACO está integrada por empresarios trabajadores, honestos y responsables con sus obligaciones, generadores de la mayoría de empleos formales y con ganas de tener un mejor San Cristóbal para vivir.
                    
                    Todas las CANACO en el país, incluyendo CANACO SCLC, se caracterizan por representar a los micro, pequeños y medianos empresarios: como papelerías, tiendas de abarrotes, posadas, tortillerías, refaccionarias, artesanos, dulcerías, transportistas, hoteles, fondas, restaurantes, zapaterías, tiendas de ropa, etc.
                  
                    En CANACO contamos con un gran aliado: nuestra confederación CONCANACO, la cual nos fortalece enormemente, ya que representa a 255 cámaras y más de 655,000 afiliados en los sectores de Comercio, Servicio y Turismo.
                </p>
            </div>
        </div>

    </div>
</section>--}}

<div class="bg-white flex justify-center py-12 px-4">

    <div class="w-full max-w-7xl flex flex-wrap md:flex-nowrap gap-6 items-center">
        
        <!-- Video ocupa la mitad del ancho -->
        <div class="w-full md:w-1/2 p-3">
            <div class="relative rounded-lg overflow-hidden shadow-xl">
                <video class="w-full h-[350px] md:h-[400px] lg:h-[450px]" autoplay muted loop>
                    <source src="{{ asset('video/video canaco.mp4') }}" type="video/mp4">
                    Tu navegador no soporta videos.
                </video>
            </div>
        </div>

        <!-- Caja de texto más destacada -->
        <div class="w-full md:w-1/2 bg-white text-gray-900 p-10 rounded-2xl shadow-2xl transform hover:scale-105 transition duration-300">
            
            <p class="text-4xl mt-10 mb-10 font-semibold text-gray-700">
                <strong>Impulsando el Crecimiento Empresarial</strong>
            </p>
            <p class="text-lg mt-4 text-gray-600">
                CANACO San Cristóbal es el motor del comercio, los servicios y el turismo en nuestra comunidad. 
                A través de innovación, representación y apoyo constante, fortalecemos a los empresarios y emprendedores, 
                asegurando su éxito y crecimiento en un mercado competitivo.
            </p>
            
        </div>

    </div>

</div>



<div class=" flex flex-col items-center mt-10 py-12 px-6">
    <h1 class="text-3xl md:text-4xl font-semibold text-gray-900 text-center">
    Nuestra Red de Liderazgo y Colaboración Empresarial
    </h1>
    <p class="text-gray-600 mt-8 mb-10 text-lg m-14 text-center">
    CANACO San Cristobal reúne líderes empresariales que, a través de su consejo, comisiones y secciones especializadas, impulsan y representan al sector comercial y de servicios.
    </p>

    <div class="mt-8 grid md:grid-cols-3 gap-8 items-center max-w-5xl w-full">
        <!-- Columna izquierda -->
        <div class="space-y-12 text-center md:text-right">
            <div>
                
                <h2 class="text-xl font-semibold text-center text-gray-900 mt-2">Consejo Directivo</h2>
                <p class="text-gray-700 text-center mt-4 mr-1 text-sm">Elegido en marzo por la Asamblea, con afiliados de distintos sectores.</p>
            </div>
            <div>
                
                <h2 class="text-xl font-semibold text-center text-gray-900 mt-2">Comisiones Temáticas</h2>
                <p class="text-gray-600 text-center mt-4 text-sm">Comisiones que fortalecen la representación empresarial.
                </p>
            </div>
        </div>

        <!-- Imagen central -->
        <div class="flex justify-center">
            <img src="{{ asset('imagenes/canaco.png') }}" alt="Fashion Process" class="rounded-lg w-full md:w-80 object-cover">
        </div>

        <!-- Columna derecha -->
        <div class="space-y-12 text-center md:text-left">
            <div>
                
                <h2 class="text-xl font-semibold text-center text-gray-900 mt-2">Consejo Consultivo</h2>
                <p class="text-gray-600 text-center mt-4 text-sm">Expresidentes que asesoran en las políticas de CANACO.</p>
            </div>
            <div>
                
                <h2 class="text-xl font-semibold text-center text-gray-900 mt-2">Secciones Especializadas</h2>
                <p class="text-gray-600 text-center mt-4 text-sm">Grupos de comerciantes unidos por objetivos comunes.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 flex flex-col items-center mt-15 py-12 min-h-screen">

    <h1 class="text-4xl font-semibold mt-8 text-gray-900">Quienes Somos</h1>
    <p class="text-gray-800 text-lg m-20 mt-5 text-center">Somos un órgano de consulta y colaboración de las autoridades federales, estatales y municipales en todos aquellos asuntos relacionados con los intereses de quien nos dedicamos al Comercio los Servicios y el Turismo.</p>

    <div class=" grid md:grid-cols-2 gap-6 max-w-5xl px-4">
        <!-- Tarjeta 1 -->
        <div class="relative group">
            <img src="{{ asset('imagenes/cards mision.jpeg') }}" alt="Reclaimed Luxe" class="rounded-lg w-full h-80 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 rounded-lg flex flex-col justify-end p-6">
                <h2 class="text-white text-2xl text-center font-semibold">Misión </h2>
                <p class="text-white font-semibold text-justify mt-2">La misión de Canaco Servytur SCLC, es representar, defender y promover los intereses legiti-mos del Comercio, los Servi-cios, y el Turismo, ante las autoridades Municipales, Estatales y Federales. Apoyar a través de asesoría, fiscal legal y gestoria, derensa y itaciento de las actividades empresariales.</p>
                
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="relative group">
            <img src="{{ asset('imagenes/canaco camara.jpeg') }}" alt="Urban Revival" class="rounded-lg w-full h-80 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 rounded-lg flex flex-col justify-end p-6">
                <h2 class="text-white text-2xl text-center font-semibold">Visión</h2>
                <p class="text-white font-semibold text-justify mt-2">Ser la institución líder en el fortalecimiento del comercio, los servicios y el turismo en San Cristóbal de Las Casas, impulsando el crecimiento empresarial, la competitividad y la responsabilidad social para generar un impacto positivo en la economía local y nacional.</p>
                
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
          <a href="#" class="hover:text-gray-900">Servicios</a>
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
