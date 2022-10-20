<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class SumatoriaSupBloques extends Component
{
    public $sumatoria_bloques = 0;
    public ResEncuesta $resEncuesta;

    protected $listeners = ['sumatoria' => 'render'];

    public function render()
    {
        // dd($this->resEncuesta);
        $this->sumatoria_bloques = 0;
        $bloques = $this->resEncuesta->bloques;
        foreach ($bloques as $bloque) {
            $this->sumatoria_bloques = $this->sumatoria_bloques + $bloque->superficie_bloque;
        }
        $this->sumatoria_bloques = number_format($this->sumatoria_bloques,2);
        return view('livewire.encuestas.respuestas.sumatoria-sup-bloques');
    }
}
