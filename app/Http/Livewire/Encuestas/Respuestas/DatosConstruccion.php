<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResBloque;
use Livewire\Component;

class DatosConstruccion extends Component
{
    public ResBloque $bloque;

    protected $rules = [
        'bloque.num_bloque' => 'numeric',
        'bloque.num_plantas' => 'numeric',
        'bloque.anio_contrucion' => 'numeric',
        'bloque.estado_consevacion' => 'string',
        'bloque.superficie_bloque' => 'nullable|numeric|regex:/^[\d]{0,11}(\.[\d]{1,3})?$/',
        'bloque.cimientos'=>'numeric',
        'bloque.estructuras'=>'numeric',
        'bloque.muros_tabiques'=>'numeric',
        'bloque.reves_muro_ext'=>'numeric',
        'bloque.cubierta_techo'=>'numeric',
        'bloque.reves_muro_int'=>'numeric',
        'bloque.acabado_pisos'=>'numeric',
        'bloque.carpinteria'=>'numeric',
        'bloque.electricidad'=>'numeric',
        'bloque.agua'=>'numeric',
        'bloque.alcantarillado'=>'numeric',
        'bloque.art_sanitarios'=>'numeric',
        'bloque.art_concina'=>'numeric',
    ];
    // public function render()
    // {
    //     return view('livewire.encuestas.respuestas.datos-construccion');
    // }

    public function save()
    {
        $this->validate();
        // dd($this->bloque);
        $this->bloque->save();
    }
}
