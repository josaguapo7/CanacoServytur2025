<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function create()
    {
        return view('documents.upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $file = $request->file('document');
        $originalName = $file->getClientOriginalName();
        $fileName = time() . '_' . $originalName;
        $userId = Auth::check() ? Auth::id() : null;

        $file->storeAs('documents', $fileName, 'public');

        Document::create([
            'original_name' => $originalName,
            'file_name' => $fileName,
            'uploaded_at' => now(),
            'user_id' => $userId
        ]);

        return redirect()->route('documents.index')->with('success', 'Documento subido correctamente.');
    }

    public function index()
    {
        $documents = Document::where('user_id', Auth::id())->get();
        return view('documents.index', compact('documents'));
    }

    public function destroy(Document $document)
    {
        if ($document->user_id !== Auth::id()) {
            abort(403, 'No autorizado');
        }

        Storage::disk('public')->delete('documents/' . $document->file_name);
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Documento eliminado correctamente.');
    }
}
