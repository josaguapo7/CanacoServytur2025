@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">{{ $socio->nombre }}</h2>

    <p><strong>Clave:</strong> {{ $socio->clave }}</p>
    <p><strong>Zona:</strong> {{ $socio->zona ?? 'Sin definir' }}</p>
    <p><strong>Tipo:</strong> {{ $socio->tipo ?? 'Sin definir' }}</p>
    <p><strong>RFC:</strong> {{ $socio->rfc ?? 'Sin definir' }}</p>
    <p><strong>Email:</strong> {{ $socio->email ?? 'Sin definir' }}</p>
    <p><strong>Estatus:</strong> {{ $socio->estatus ?? 'Sin definir' }}</p>

    <a href="{{ route('admin.socios') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg">
        Volver a la lista
    </a>
</div>
@endsection
