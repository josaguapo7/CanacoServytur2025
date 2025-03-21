@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6"> Documentos de {{ $user->name }}</h2>

    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Nombre del Archivo</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Fecha de Subida</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($documents as $document)
                    <tr class="hover:bg-gray-100 transition duration-300 border-b border-gray-200">
                        <td class="px-6 py-4 text-gray-700 font-medium">
                            <a href="{{ asset('storage/documents/' . $document->file_name) }}"
                                target="_blank"
                                class="text-black-500 hover:underline">
                                {{ $document->original_name }}
                            </a>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            {{ $document->uploaded_at->format('d/m/Y H:i') }}
                        </td>
                        <td class="px-6 py-4">
                            <form method="POST" action="{{ route('documents.destroy', $document->id) }}" onsubmit="return confirm('¿Seguro que deseas eliminar este documento?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-block text-gray-700 border border-gray-300 px-4 py-2 rounded-md hover:bg-red-400 transition duration-300">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-gray-500 py-6">
                            No hay documentos para mostrar.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
