@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-4xl p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold mb-4 text-center">Subir Documentos</h2>

        @if(session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div
                id="drop-area"
                class="border-2 border-dashed border-blue-400 bg-blue-50 rounded-lg p-8 flex flex-col items-center justify-center cursor-pointer transition-all hover:bg-blue-100"
                ondrop="handleDrop(event)"
                ondragover="event.preventDefault();"
                onclick="document.getElementById('fileInput').click();"
            >
                <svg class="w-12 h-12 text-blue-400 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16v-4m0 0v-4m0 4h4m-4 0H8m8 4a4 4 0 01-8 0m8 0a4 4 0 01-8 0m8 0a4 4 0 01-8 0m8 0a4 4 0 01-8 0m8 0a4 4 0 01-8 0"></path>
                </svg>
                <p class="text-gray-600">Envía tus archivos aquí</p>
                <p class="text-sm text-gray-400">Haz clic o arrastra y suelta</p>
            </div>

            <input type="file" id="fileInput" name="document" class="hidden" onchange="handleFileSelect(event)" required>

            <div id="file-name" class="text-center text-gray-500 mt-2"></div>

            <div class="text-center">
                <button
                    type="submit"
                    class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">
                    Subir documento
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function handleDrop(event) {
        event.preventDefault();
        const files = event.dataTransfer.files;
        if (files.length > 0) {
            document.getElementById('fileInput').files = files;
            handleFileSelect({ target: { files } });
        }
    }

    function handleFileSelect(event) {
        const file = event.target.files[0];
        if (file) {
            document.getElementById('file-name').textContent = `Archivo seleccionado: ${file.name}`;
        }
    }
</script>
@endsection
