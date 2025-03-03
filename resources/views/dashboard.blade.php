@extends('layouts.app')
@section('content')

<link rel="icon" type="image/png" href="{{ asset('imagenes/canaco.png') }}">

<div class="flex h-screen bg-white">
    <!-- Menú lateral -->
    <div class="w-64 bg-gray-100 text-gray-900 p-6 flex flex-col gap-4 shadow-lg fixed h-full">
        <h2 class="text-2xl font-semibold mb-4">Menú</h2>
        <a href="#" class="px-4 py-2 rounded-lg hover:bg-blue-900 hover:text-white transition">Inicio</a>
        <a href="{{ route('socios.index') }}" class="px-4 py-2 rounded-lg hover:bg-blue-900 hover:text-white transition">Socios</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="px-4 py-2 rounded-lg hover:bg-red-600 hover:text-white transition">
                Cerrar sesión
            </button>
        </form>

    </div>

</div>
@endsection
