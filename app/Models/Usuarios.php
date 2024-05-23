<?php

namespace App\Models;

//primera version
// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as AuthenticatableUser;
// use Illuminate\Notifications\Notifiable;


// class Usuarios extends AuthenticatableUser
// {
//     use HasFactory, Notifiable;

//     // Resto del código del modelo...
// }


use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;




class Usuarios extends Authenticatable implements AuthenticatableContract
{
    use Notifiable, HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'correo', 'contrasena',
    ];

    protected $hidden = [
        'contrasena', 'remember_token',
    ];

    // Almacenamos la contraseña encriptada
    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = bcrypt($value);
    }
    public function getAuthPassword()
    {
        return $this->contrasena;
    }
}