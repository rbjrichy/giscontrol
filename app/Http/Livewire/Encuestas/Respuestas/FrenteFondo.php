<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class FrenteFondo extends Component
{
    public ResEncuesta $respuesta;

    protected $rules = [
        'respuesta.frente' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,3})?$/',
        'respuesta.fondo' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,3})?$/'
    ];

    public function render()
    {
        return view('livewire.encuestas.respuestas.frente-fondo');
    }

    public function save()
    {
        $this->validate();
        $this->respuesta->save();
        $this->emit('alert', ['type'=>'success','message'=>'Coheficiente Frente/Fondo guardado correctamente']);
    }
}
