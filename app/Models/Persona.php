<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'ci_nit', 'nombres', 'apellidos', 'direccion', 'telefonos', 'fecha_nac'
    ];

    public function getFullNameAttribute()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }
    public function usuario()
    {
        return $this->hasOne(User::class);
    }
}
