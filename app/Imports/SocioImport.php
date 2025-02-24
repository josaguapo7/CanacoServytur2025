<?php
namespace App\Imports;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Socio;
use App\Auth\SocioController;
use Illuminate\Support\Facades\Log;

class SocioImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        Log::info(json_encode($row));

        return Socio::firstOrCreate(
            ['clave' => $row['clave']], // Buscar por clave
            [
                'zona_cliente' => $row['zona_del_cliente'], // <-- Cambiar nombres según log
                'tipo_cliente' => $row['tipo_de_cliente'],
                'nombre' => $row['nombre'],
                'rfc' => $row['rfc'] ?? null,
                'email' => $row['email'] ?? null,
                'estatus' => $row['estatus'],
            ]
        );
    }
}

