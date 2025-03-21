<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Mostrar todos los usuarios
    public function index()
    {
        $users = User::withCount('documents')->get();

        return view('admin.index', compact('users'));
    }

    // Mostrar documentos de un usuario específico
    public function showDocuments(User $user)
    {
        $documents = $user->documents;

        return view('admin.documents', compact('user', 'documents'));
    }
}
