<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResMejora;
use Livewire\Component;

class DatosMejoras extends Component
{
    public ResMejora $mejora;
    protected $rules = [
        'mejora.num_mejora' => 'numeric',
        'mejora.nombre_mejora' => 'string',
        'mejora.tipologia_mejora' => 'string',
        'mejora.anio_const_mejora' => 'numeric',
        'mejora.consevacion_mejora' => 'string',
        'mejora.superficie_mejora' => 'nullable|numeric|regex:/^[\d]{0,11}(\.[\d]{1,3})?$/',
    ];

    // public function render()
    // {
    //     return view('livewire.encuestas.respuestas.datos-mejoras');
    // }

    public function save()
    {
        $this->validate();
        $this->mejora->save();
    }
}
