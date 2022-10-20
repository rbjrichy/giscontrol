<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResMejora extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_mejora',
        'nombre_mejora',
        'tipologia_mejora',
        'anio_const_mejora',
        'consevacion_mejora',
        'superficie_mejora',
    ];
}
