<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    protected $fillable = [
        'centro_urbano',
        'codigo_cu',
        'descripcion',
    ];
}
