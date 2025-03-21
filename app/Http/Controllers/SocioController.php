<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Imports\SociosImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

// class SocioController extends Controller
// {
//     public function index()
//     {
//         $socios = Socio::all();
//         return view('admin.socios.index', compact('socios'));
//     }

//     public function import(Request $request)
//     {

//     }
// }

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::all();
        return view('admin.socios.index', compact('socios'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new SociosImport, $request->file('file'));

        return redirect()->route('admin.socios')->with('success', 'Datos importados correctamente.');
    }

    public function show($id)
    {
        $socio = Socio::findOrFail($id);
        return view('admin.socios.show', compact('socio'));
    }
}
