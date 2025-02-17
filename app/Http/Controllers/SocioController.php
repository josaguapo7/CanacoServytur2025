<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socio;
use App\Imports\SociosImport;
use Maatwebsite\Excel\Facades\Excel;

class SocioController extends Controller
{
    public function index()
    {

        $Socios = Socio::all(); // Obtener socios de la base de datos
        return view('socios.index', compact('Socios')); // Enviar datos a la vista

    }

    public function importar(Request $request)
    {
        $request->validate([
            'archivo' => 'required|mimes:xlsx,csv',
        ]);

        Excel::import(new SociosImport, $request->file('archivo'));

        return redirect()->route('socios.index')->with('success', 'Lista de socios importada correctamente.');
    }
}
