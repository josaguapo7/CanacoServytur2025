<?php

namespace App\Imports;

use App\Models\Socio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SociosImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return Socio::updateOrCreate(
            ['email' => $row['email']], // Si el email ya existe, actualiza los datos
            [
                'nombre' => $row['nombre'],
                'telefono' => $row['telefono'] ?? null,
            ]
        );
    }
}
