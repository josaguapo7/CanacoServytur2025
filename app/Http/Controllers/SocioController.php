<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Socio;
use SimpleSoftwareIO\QrCode\Facades\QrCode; // Para generar QR
use Maatwebsite\Excel\Facades\Excel; // Para importar desde Excel
use App\Imports\SocioImport; // Importación de socios desde Excel

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::all();
        return view('dashboard', compact('socios'));
    }

    public function create()
    {
        return view('socios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'clave' => 'required|unique:socios',
            'nombre' => 'required',
        ]);

        Socio::create($request->all());

        return redirect()->route('socios.index')->with('success', 'Socio creado correctamente.');
    }

    public function edit($id)
    {
        $socio = Socio::findOrFail($id);
        return view('socios.edit', compact('socio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'clave' => 'required|unique:socios,clave,' . $id,
            'nombre' => 'required',
        ]);

        $socio = Socio::findOrFail($id);
        $socio->update($request->all());

        return redirect()->route('socios.index')->with('success', 'Socio actualizado correctamente.');
    }

    public function destroy($id)
    {
        Socio::findOrFail($id)->delete();
        return redirect()->route('socios.index')->with('success', 'Socio eliminado correctamente.');
    }

    public function generarQR($id)
    {
        $socio = Socio::findOrFail($id);
        $qr = QrCode::size(200)->generate(route('socios.show', $socio->id));
        return view('socios.qr', compact('socio', 'qr'));
    }

    public function importarExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new SocioImport, $request->file('file'));

        return redirect()->route('socios.index')->with('success', 'Lista de socios importada correctamente.');
    }
}
