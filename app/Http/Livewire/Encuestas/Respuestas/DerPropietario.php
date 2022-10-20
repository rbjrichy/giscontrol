<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class DerPropietario extends Component
{
    public ResEncuesta $respuesta;
   
    protected $rules = [
        // 'post.title' => 'required|string|min:6',
        'respuesta.doc_adqui' => 'string',
        'respuesta.doc_notario_fecha' => 'string',
        'respuesta.num_matricula' => 'string',
        'respuesta.ddrr_asiento' => 'string',
        'respuesta.ddrr_lugar' => 'string',
        'respuesta.ddrr_fecha' => 'date',
    ];

    // public function render()
    // {
    //     // $this->respuesta->ddrr_fecha = substr($this->respuesta->ddrr_fecha, 0, 10);
    //     return view('livewire.encuestas.respuestas.der-propietario');
    // }

    public function save()
    {
        $this->validate();
        $this->respuesta->save();
    }

}
