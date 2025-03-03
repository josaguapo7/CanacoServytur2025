<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'empresa',
        'nombre',
        'email',
        'telefono',
        'rfc',
        'password',
    ];


    protected $hidden = [
        'password',
    ];

    public function isAfiliado()
    {
        return $this->role === 'afiliado';
    }
}
