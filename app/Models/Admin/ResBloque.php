<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResBloque extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_bloque',
        'num_plantas',
        'anio_contrucion',
        'tipologia_edif',
        'estado_consevacion',
        'superficie_bloque',
        'cimientos',
        'estructuras',
        'muros_tabiques',
        'reves_muro_ext',
        'cubierta_techo',
        'reves_muro_int',
        'acabado_pisos',
        'carpinteria',
        'electricidad',
        'agua',
        'alcantarillado',
        'art_sanitarios',
        'art_concina',
        'suma_servicios',
    ];

    public function getSumatoriaAttribute($value)
    {
        return $this->cimientos+
               $this->estructuras+
               $this->muros_tabiques+
               $this->reves_muro_ext+
               $this->cubierta_techo+
               $this->reves_muro_int+
               $this->acabado_pisos+
               $this->carpinteria+
               $this->electricidad+
               $this->agua+
               $this->alcantarillado+
               $this->art_sanitarios+
               $this->art_concina;
    }

    public function getTipologiaAttribute()
    {
        $x = $this->sumatoria;
        switch ($x) {
            case $x < 25:
                return 'ME';
                break;
            case $x >= 25 && $x <= 34:
                return 'E';
                break;
            case $x >= 35 && $x <= 44:
                return 'N';
                break;
            case $x >= 45 && $x <= 54:
                return 'B';
                break;
            case $x >= 55 && $x <= 64:
                return 'MB';
                break;
            case $x >= 65 && $x <= 75:
                return 'L';
                break;
            case $x > 75:
                return 'ML';
                break;
            default:
                return '--';
                break;
        }
    }
}
