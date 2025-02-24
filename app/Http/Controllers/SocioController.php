<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Imports\SocioImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SocioController extends Controller
{
    // Método para mostrar la vista del Dashboard con los socios
    public function index()
{
    $socios = Socio::all(); // Obtener todos los socios
    return view('dashboard', compact('socios')); // Enviar la variable a la vista
}


    // Método para importar datos desde el archivo Excel
    public function importarExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new SocioImport, $request->file('file'));

        return redirect()->route('dashboard')->with('success', '¡Datos importados correctamente!');
    }
}
