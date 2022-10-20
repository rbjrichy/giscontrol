<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class SumatoriaSupMejoras extends Component
{
    public $sumatoria_mejoras = 0;
    public ResEncuesta $resEncuesta;

    protected $listeners = ['sumatoria_mejoras' => 'render'];
    
    public function render()
    {
        $this->sumatoria_mejoras = 0;
        $mejoras = $this->resEncuesta->mejoras;
        foreach ($mejoras as $mejora) {
            $this->sumatoria_mejoras = $this->sumatoria_mejoras + $mejora->superficie_mejora;
        }
        $this->sumatoria_mejoras = number_format($this->sumatoria_mejoras,2);
        return view('livewire.encuestas.respuestas.sumatoria-sup-mejoras');
    }
}
