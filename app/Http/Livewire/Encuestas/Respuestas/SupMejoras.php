<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResMejora;
use Livewire\Component;

class SupMejoras extends Component
{
    public ResMejora $mejora;
    protected $rules =[
        'mejora.superficie_mejora' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,3})?$/'
    ];

    public function render()
    {
        return view('livewire.encuestas.respuestas.sup-mejoras');
    }

    public function save()
    {
        $this->validate();
        $this->mejora->save();
        $this->emit('sumatoria_mejoras');
        $this->emit('alert', ['type'=>'success','message'=>'Superficie de mejora guardada']);
    }
}
