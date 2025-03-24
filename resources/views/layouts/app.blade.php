@livewireStyles
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @livewireScripts
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Crecimiento de Usuarios</h2>

                    <!-- Gráfico Estático Ilustrativo -->
                    <div class="bg-gray-100 p-6 rounded-lg">
                    <div class="w-full h-full bg-white border border-gray-300 rounded-lg flex items-center justify-center overflow-hidden">
                        <img src="https://topicflower.com/blog/wp-content/uploads/2019/06/%E2%80%A2-Instagram-Stories-usuarios-activos-diarios-2019-Estad%C3%ADstica.png" alt="Gráfico de Usuarios" class="w-full h-full object-cover">
                    </div>

                        
                        <!-- Indicador Numérico -->
                        <div class="mt-6 flex justify-center">
                            <div class="text-center bg-blue-500 text-white p-6 rounded-lg shadow-md w-64">
                                <p class="text-3xl font-bold">500</p>
                                <p class="text-lg">Usuarios Registrados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
