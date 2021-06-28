<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula'
    ];

    protected $hidden = [
      'created_at',
      'updated_at',
    ];
}
