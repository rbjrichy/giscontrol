<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class SuperficieTerreno extends Component
{
    public ResEncuesta $respuesta;

    protected $rules = [
        'respuesta.super_terreno' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,3})?$/'
    ];
    
    public function render()
    {
        return view('livewire.encuestas.respuestas.superficie-terreno');
    }
    public function save()
    {
        $this->validate();
        $this->respuesta->save();
        $this->emit('alert', ['type'=>'success','message'=>'Superficie del terreno guardada']);
    }
}
