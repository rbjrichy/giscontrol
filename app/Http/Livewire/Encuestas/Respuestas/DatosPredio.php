<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class DatosPredio extends Component
{
    public ResEncuesta $respuesta;
    
    protected $rules =[
        'respuesta.orig_asentamiento' => 'required|string',
        'respuesta.tipo_inmueble' => 'required|string',
        'respuesta.locacion' => 'required|string',
        'respuesta.forma_adquisicion' => 'required|string',
        'respuesta.finan_adq_inmueble' => 'required|string',
        'respuesta.ins_catastral' => 'required|string',
        'respuesta.linea_muni_apro' => 'required|string',
        'respuesta.plano_pre_no_apro' => 'required|string',
        'respuesta.plano_emitido_por' => 'required|string',
        'respuesta.nombre_inmueble' => 'nullable|string',
        'respuesta.zona_homogenea' => 'string',
        'respuesta.exclusion_tributaria' => 'string',
        'respuesta.exencion_tributaria' => 'string',
        'respuesta.ultima_gestion_pagada' => 'string',
        'respuesta.pmc_gam' => 'string',
    ];


    // public function render()
    // {
    //     return view('livewire.encuestas.respuestas.datos-predio');
    // }
    public function save()
    {
        // $this->validate();
        $this->respuesta->save();
    }
}
