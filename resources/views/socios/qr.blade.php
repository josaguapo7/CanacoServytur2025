@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mt-10 text-center">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">Código QR de {{ $socio->nombre }}</h2>

    <div class="mb-4">
        <span class="px-3 py-1 rounded-full text-sm font-medium
            {{ $socio->estatus == 'Activo' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }}">
            {{ $socio->estatus }}
        </span>
    </div>

    <div class="flex justify-center mb-4">
        {!! $qr !!}
    </div>

    <a href="{{ route('socios.index') }}"
        class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition">
        Volver
    </a>
</div>
@endsection
