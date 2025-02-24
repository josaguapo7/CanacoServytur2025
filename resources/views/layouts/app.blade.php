<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Contenido del head -->
    </head>
    <body>
        <div class="min-h-screen bg-gray-100">
            <!-- Header -->
            @isset($header)
                <header>
                    {{ $header }}
                </header>
            @endisset

            <!-- Contenido de la página -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
