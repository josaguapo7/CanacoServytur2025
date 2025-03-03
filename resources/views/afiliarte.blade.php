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

        <script>
            function calcularCuota() {
                let empleados = parseInt(document.getElementById('empleados').value);
                let camara = 0, siem = 0, total = 0;

                if (empleados >= 0 && empleados <= 2) {
                    camara = 1100; siem = 100;
                } else if (empleados === 3) {
                    camara = 1550; siem = 300;
                } else if (empleados >= 4 && empleados <= 10) {
                    camara = 1910; siem = 640;
                } else if (empleados >= 10 && empleados <= 20) {
                    camara = 2460; siem = 640;
                } else if (empleados >= 20 && empleados <= 30) {
                    camara = 3160; siem = 640;
                } else if (empleados >= 30 && empleados <= 40) {
                    camara = 3860; siem = 640;
                } else if (empleados > 40) {
                    camara = 6360; siem = 640;
                }

                total = camara + siem;
                document.getElementById('resultado').innerHTML = `Cámara: $${camara.toFixed(2)} <br> SIEM: $${siem.toFixed(2)} <br> Total: $${total.toFixed(2)}`;
            }
        </script>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        <style>
/*! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246/.5);--tw-shadow:0 0 #0000}*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content:""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;margin:0;padding:0}button{background-color:transparent;background-image:none}img,svg,video,canvas,audio,iframe{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}.absolute{position:absolute}.relative{position:relative}.top-0{top:0}.z-0{z-index:0}.flex{display:flex}.grid{display:grid}.hidden{display:none}.w-full{width:100%}.max-w-2xl{max-width:42rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.justify-center{justify-content:center}.items-center{align-items:center}.gap-4{gap:1rem}.overflow-hidden{overflow:hidden}.rounded-lg{border-radius:.5rem}.border{border-width:1px}.border-gray-300{border-color:rgb(209 213 219/1)}.bg-gray-50{background-color:rgb(249 250 251/1)}.bg-white{background-color:rgb(255 255 255/1)}.p-6{padding:1.5rem}.px-4{padding-left:1rem;padding-right:1rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.text-center{text-align:center}.text-sm{font-size:.875rem;line-height:1.25rem}.text-white{color:rgb(255 255 255/1)}.shadow-sm{box-shadow:0 1px 2px 0 rgb(0 0 0/.05)}.ring-1{box-shadow:0 0 0 1px var(--tw-ring-color)}
        </style>

        @endif
    </head>

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap justify-between items-center p-4">
        <a class="flex items-center space-x-8 rtl:space-x-reverse">
            <img src="https://concanacodigital.s3.amazonaws.com/establecimientos/135.20220228113405.png" class="h-16" alt="">
            <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white font-sans">Canaco</span>
        </a>
        <div class="flex md:order-2">
            <!-- Botón para menú en móviles -->
            <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <!-- Menú de navegación -->
        <div id="navbar-sticky" class="hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="http://127.0.0.1:8000/" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="sobrenosotros" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">
                        Sobre Nosotros
                    </a>
                </li>
                <li>
                    <a href="servicios" class="block py-2 px-3 text-gl text-black rounded-sm md:bg-transparent md:text-black md:p-0 md:dark:text-white hover:text-blue-700 hover:text-xl transition-all duration-300">
                        Nuestros Servicios
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Script para manejar la visibilidad del menú en móviles -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("navbar-sticky").classList.toggle("hidden");
    });
</script>


<body>

<br><br><br><br><br>
<div class="max-w-7xl mx-auto px-6 py-12">
    <h2 class="text-4xl font-bold text-center mb-4">Beneficios de Afiliación</h2>
    <p class="text-center text-lg text-gray-600 mb-10">
        Al afiliarte a CANACO, obtendrás acceso a múltiples beneficios para fortalecer tu negocio.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Asesoría Empresarial -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://thumbs.dreamstime.com/b/asesoramiento-jur%C3%ADdico-para-ilustraciones-de-vectores-dibujos-animados-aislados-por-empresas-abogada-que-ayuda-la-empresa-en-253366108.jpg" alt="Asesoría Empresarial" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Asesoría Empresarial</h3>
            <p class="text-gray-600 mt-2">Recibe asesoría en temas fiscales, legales y administrativos para tu empresa.</p>
        </div>

        <!-- Capacitación Continua -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://png.pngtree.com/png-clipart/20230825/original/pngtree-consulting-clients-isolated-cartoon-vector-illustrations-picture-image_8710496.png" alt="Capacitación Continua" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Capacitación Continua</h3>
            <p class="text-gray-600 mt-2">Accede a cursos, talleres y conferencias exclusivas para mejorar tu negocio.</p>
        </div>

        <!-- Red de Contactos -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://media.istockphoto.com/id/930420128/es/vector/ilustraci%C3%B3n-de-comunicaci%C3%B3n-global-de-las-personas.jpg?s=612x612&w=0&k=20&c=uxZPfZlIM9n40Aaocj2jvLXe08RnZ_CruEifXkxmSBw=" alt="Red de Contactos" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Red de Contactos</h3>
            <p class="text-gray-600 mt-2">Conéctate con otras empresas y amplía tus oportunidades de negocio.</p>
        </div>

        <!-- Promoción y Publicidad -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://img.freepik.com/vector-gratis/imagenes-predisenadas-promocion-marketing-ilustradas_52683-74351.jpg" alt="Promoción y Publicidad" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Promoción y Publicidad</h3>
            <p class="text-gray-600 mt-2">Destaca tu empresa en nuestros directorios y eventos empresariales.</p>
        </div>

        <!-- Acceso a Financiamiento -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://st2.depositphotos.com/2419757/8513/v/450/depositphotos_85136908-stock-illustration-concept-crowd-funding-banknotes-and.jpg" alt="Acceso a Financiamiento" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Acceso a Financiamiento</h3>
            <p class="text-gray-600 mt-2">Obtén información sobre créditos y apoyos gubernamentales para tu empresa.</p>
        </div>

        <!-- Representación y Defensa -->
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center text-center border border-gray-200">
            <img src="https://static.vecteezy.com/system/resources/previews/003/774/320/non_2x/lawyer-rgb-color-icon-attorney-advocate-legal-representative-trial-courthouse-legislature-law-enforcement-justice-legal-assistance-isolated-illustration-vector.jpg" alt="Representación y Defensa" class="w-28 h-28 mb-2">
            <h3 class="text-lg font-semibold text-gray-800">Representación y Defensa</h3>
            <p class="text-gray-600 mt-2">CANACO te representa ante organismos gubernamentales y regula intereses del sector.</p>
        </div>
    </div>
</div>


    <div class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-4xl font-bold text-center mb-6">Requisitos para Afiliarte</h2>
    <p class="text-center text-lg text-gray-600 mb-8">
        Para unirte a CANACO y disfrutar de todos sus beneficios, es necesario cumplir con los siguientes requisitos:
    </p>

    <div class="bg-white p-6 shadow-lg rounded-lg">
        <ul class="list-disc list-inside space-y-4 text-gray-700">
            <li><span class="font-semibold">Llenar formatos de CAMARA y SIEM:</span> Formatos oficiales requeridos para el registro.</li>
            <li><span class="font-semibold">Constancia de situación fiscal vigente:</span> Documento actualizado emitido por el SAT.</li>
            <li><span class="font-semibold">Comprobante de domicilio:</span> Recibo de luz, agua o teléfono.</li>
            <li><span class="font-semibold">INE del propietario o representante legal:</span> Identificación oficial vigente.</li>
            <li><span class="font-semibold">Copia del último pago del IMSS:</span> Documento que avala el cumplimiento de las obligaciones ante el IMSS.</li>
            <li><span class="font-semibold">Copia de Acta Constitutiva (solo para personas morales):</span> Documento que acredita la constitución legal de la empresa.</li>
        </ul>
    </div>
</div>



<br><br><br>
<h2 class="text-4xl font-bold text-center">Simula tu Cuota de Afiliación</h2>
    <p class="text-center text-lg text-gray-600 mt-2">
    Obtén en segundos el costo de inscripción y mantenimiento en CANACO según el número de empleados de tu negocio
    </p>

    <div class="mt-10 w-full flex items-center justify-center p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-screen-xl grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col justify-center text-center md:text-left p-4">
                <h1 class="text-2xl font-bold mb-4 text-gray-800">Calcula tus Cuotas de CANACO</h1>
                <p class="text-gray-600 text-lg">Ingresa la cantidad de empleados de tu empresa para conocer el monto total a pagar en la Cámara y el SIEM.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg shadow-inner text-center">
                <label for="empleados" class="block text-lg font-medium text-gray-700 mb-2">Número de empleados:</label>
                <input type="number" id="empleados" class="border rounded-lg p-3 w-full mb-4 text-center" min="0" oninput="calcularCuota()">
                <div id="resultado" class="text-lg font-semibold text-gray-800"></div>
            </div>
        </div>
    </div>

<br><br>
<div class="bg-white shadow-md rounded-lg p-6 text-center">
    <h2 class="text-xl font-bold text-gray-800">Descarga tus Documentos</h2>
    <p class="text-gray-600 mt-2">
        Toca la imagen para descargar el documento que necesitas.
    </p>

    <div class="mt-10 mb-5 flex flex-col sm:flex-row justify-center gap-6">
        <!-- Imagen para descargar Documento 1 -->
         
        <a href="#" download>
            <img src="https://cdn.iconscout.com/icon/free/png-256/free-microsoft-excel-1868959-1583123.png?f=webp" alt="Descargar Documento 1" class="w-16 h-16 cursor-pointer transition-transform transform hover:scale-110">
        </a>

        <!-- Imagen para descargar Documento 2 -->
        <a href="#" download>
            <img src="https://cdn-icons-png.flaticon.com/256/337/337946.png" alt="Descargar Documento 2" class="w-16 h-16 ml-10 cursor-pointer transition-transform transform hover:scale-110">
        </a>
    </div>
</div>




</body>
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
        <p>© 2024 Todos los derechos reservados.</p>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-900">Privacidad</a>
          <a href="#" class="hover:text-gray-900">Términos</a>
        </div>
      </div>
    </div>
  </section>
</html>
