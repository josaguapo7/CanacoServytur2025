@extends('layouts.app')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-white">
    <div class="bg-white shadow-xl rounded-lg p-12 w-full max-w-2xl border-t-8 border-blue-900 fade-in">
        <div class="flex justify-center">
            <img src="{{ asset('imagenes/canaco.png') }}" alt="Logo" class="w-20 h-20">
        </div>
        <h1 class="text-4xl text-center text-blue-900 font-bold mt-6">Subir tus documentos</h1>
        <div class="border-dashed border-2 border-blue-900 p-8 mt-8 rounded-lg text-center">
            <p class="text-lg text-gray-700">Arrastra y suelta un archivo o</p>
            <button class="bg-blue-900 text-white px-8 py-3 mt-4 rounded-lg hover:bg-blue-800 transition-all">Seleccionar un archivo</button>
        </div>
        <div class="flex items-center mt-6">
            <input type="checkbox" id="terms" class="mr-2">
            <label for="terms" class="text-gray-700">Acepto los <a href="#" class="text-blue-900 underline">términos y condiciones</a></label>
        </div>
        <div class="text-center mt-4">
            <a href="/aviso-de-privacidad" class="text-blue-900 underline text-sm">Consulta nuestro aviso de privacidad</a>
        </div>
        <p class="text-sm text-gray-500 text-center mt-4">Los archivos serán gestionados de forma segura.</p>
    </div>
</div>
@endsection