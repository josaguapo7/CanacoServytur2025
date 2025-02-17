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

            ['email' => $row['email'] ?? null], // Identificar si el email ya existe
            [
                'zona_cliente' => $row['zona_del_cliente'] ?? 'Sin zona', // Cambio clave correcta
                'tipo_cliente' => $row['tipo_de_cliente'] ?? 'No especificado',
                'nombre' => $row['nombre'] ?? null,
                'rfc' => $row['rfc'] ?? null,
                'telefono' => $row['telefono'] ?? null,
                'codigo_qr' => $row['codigo_qr'] ?? null,

            ['email' => $row['email']], // Si el email ya existe, actualiza los datos
            [
                'nombre' => $row['nombre'],
                'telefono' => $row['telefono'] ?? null,

            ]
        );
    }
}
