<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;

class ContactoController extends Controller
{
    public function enviarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string'
        ]);

        $datos = $request->all();

        Mail::to('josafatrujillo604@gmail.com')->send(new ContactoMailable($datos));

        return back()->with('success', 'Correo enviado correctamente.');

    }
}
