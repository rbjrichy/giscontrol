<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResBloque;
use Livewire\Component;

class SupBloques extends Component
{
    public ResBloque $bloque;
    protected $rules =[
        'bloque.superficie_bloque' => 'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,3})?$/'
    ];
    
    public function render()
    {
        return view('livewire.encuestas.respuestas.sup-bloques');
    }

    public function save()
    {
        $this->validate();
        $this->bloque->save();
        $this->emit('sumatoria');
        $this->emit('alert', ['type'=>'success','message'=>'Superficie de bloque guardada']);

    }
}
