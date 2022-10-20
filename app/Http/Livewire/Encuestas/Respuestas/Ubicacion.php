<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class Ubicacion extends Component
{
    public ResEncuesta $respuesta;

    
    // public function render()
    // {
    //     return view('livewire.encuestas.respuestas.ubicacion');
    // }

    // public function mount($respuesta)
    // {
    //     $this->respuesta = $respuesta;
    // }

    protected $rules = [
        // 'post.title' => 'required|string|min:6',
        // 'post.content' => 'required|string|max:500',
        'respuesta.dis' => 'string',
        'respuesta.man' => 'string',
        'respuesta.pre' => 'string',
        'respuesta.dis_lev' => 'string',
        'respuesta.man_lev' => 'string',
        'respuesta.pre_lev' => 'string',
        'respuesta.centro_urbano' => 'string',
        'respuesta.barrio_urbanizacion' => 'string',
        'respuesta.direccion_inmu' => 'string',
        'respuesta.num_inmu' => 'string',
    ];

    public function save()
    {
        $this->respuesta->save();
    }
}
