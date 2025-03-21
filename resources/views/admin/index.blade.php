@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6"> Lista de Usuarios</h2>

    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Nombre</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Documentos</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="hover:bg-gray-100 transition duration-300 border-b border-gray-200">
                        <td class="px-6 py-4 text-gray-600">{{ $user->id }}</td>
                        <td class="px-6 py-4 text-gray-700 font-medium">{{ $user->name }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $user->documents_count }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.user.documents', $user->id) }}"
                                class="inline-block text-gray-700 border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-200 transition duration-300">
                                Ver Documentos
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-gray-500 py-6">
                            No hay usuarios para mostrar.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
