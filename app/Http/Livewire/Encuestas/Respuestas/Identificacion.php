<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class Identificacion extends Component
{
    public ResEncuesta $respuesta;
    
    protected $rules = [
        'respuesta.personeria'=>'string',
        'respuesta.titularidad'=>'string',
        'respuesta.tipo_titularidad'=>'string',
        'respuesta.tipo_doc_iden'=>'string',
        'respuesta.num_doc_iden'=>'string',
        'respuesta.expedido'=>'string',
        // 'respuesta.num_telefono'=>'string',
        // 'respuesta.whatsapp'=>'string',
        'respuesta.nomb_razon_social'=>'string',
        'respuesta.tit_dominio_ant'=>'string',
    ];

    // public function render()
    // {
    //     return view('livewire.encuestas.respuestas.identificacion');
    // }
    
    public function save()
    {
        $this->respuesta->save();
    }
}
