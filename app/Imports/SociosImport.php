<?php

namespace App\Imports;

use App\Models\Socio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SociosImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Socio([
            'clave'   => $row['clave'],
            'zona'    => $row['zona'] ?? null,
            'tipo'    => $row['tipo'] ?? null,
            'nombre'  => $row['nombre'],
            'rfc'     => $row['rfc'] ?? null,
            'email'   => $row['email'] ?? null,
            'estatus' => $row['estatus'] ?? 'Activo',
        ]);
    }
}
