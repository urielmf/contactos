<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'direccion',
        'telefono',
        'celular',
        'fecha_nacimiento',
    ];

    protected $dates = [
        'fecha_nacimiento',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date:d-m-Y',
    ];
}
