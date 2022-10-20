<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ActualizarZonah extends Component
{
    public $respuestas;
    public $zonah;

    // public function mount($respuesta)
    // {
    //     $this->dis = $respuesta->dis;
    //     $this->man = $respuesta->man;
    //     $this->zona_homogenea = $respuesta->zona_homogenea;
    //     $this->cantidad = $respuesta->cantidad;
    // }

    public function render()
    {
        $this->respuestas = ResEncuesta::whereNotNull('dis')
                             ->whereNotNull('man')
                             ->groupBy('dis', 'man', 'zona_homogenea')
                             ->orderByRaw('dis, man')
                             ->select('dis', 'man', 'zona_homogenea', DB::raw('count(zona_homogenea) as cantidad'))
                             ->get();
        return view('livewire.encuestas.respuestas.actualizar-zonah');
    }
    public function actualizarZona($dis, $man)
    {
        ResEncuesta::where('dis', $dis)
                   ->where('man', $man)
                   ->update(['zona_homogenea'=>$this->zonah]);
        $this->emit('alert', ['type'=>'success','message'=>'Zona Homogénea Actualizada Dis:'.$dis.' Man:'. $man]);
        $this->reset(['zonah']);
    }
}
