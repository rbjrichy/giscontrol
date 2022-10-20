<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class DatosTerreno extends Component
{
    public ResEncuesta $respuesta;

    protected $rules = [
        'respuesta.frente' => 'string',
        'respuesta.fondo' => 'string',
        'respuesta.tipo_de_via' => 'string',
        'respuesta.topografia' => 'string',
        'respuesta.forma' => 'string',
        'respuesta.ubicacion' => 'string',
        'respuesta.revestimiento_via' => 'string',
        'respuesta.ener_electrica' => 'string',
        'respuesta.agua_potable' => 'string',
        'respuesta.telefono' => 'string',
        'respuesta.alcantarillado' => 'string',
        'respuesta.gas_domiciliario' => 'string',

    ];
    // public function render()
    // {
    //     return view('livewire.encuestas.respuestas.datos-terreno');
    // }

    public function save()
    {
        $this->validate();
        $this->respuesta->save();
    }
}
