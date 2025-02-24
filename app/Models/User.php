<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Asegúrate de incluir esto
    ];

    public function isAdmin()
    {
        return $this->role === 'admin'; // Verifica que tu base de datos tenga esta columna
    }
}


