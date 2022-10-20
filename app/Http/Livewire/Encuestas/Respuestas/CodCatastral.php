<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class CodCatastral extends Component
{
    public ResEncuesta $respuesta;
    public $codigoRepetido = array();
    
    protected $rules = [
        'respuesta.dis' => 'required|numeric|min:1',
        'respuesta.man' => 'required|numeric|min:1',
        'respuesta.pre' => 'required|numeric|min:1',
    ];

    public function render()
    {
        return view('livewire.encuestas.respuestas.cod-catastral')->with('codigoRepetido', $this->codigoRepetido);
    }

    public function save()
    {
        $this->validate();
        if($this->validar_cod_catastral())
        {
            $this->respuesta->save();
            $this->emit('alert', ['type'=>'success','message'=>'Código catastral asignado']);

        }
        else
        {
            $this->emit('alert', ['type'=>'error','message'=>'Código catastral repetido, asigne otro valor']);
        }

    }
    private function validar_cod_catastral()
    {
        $resEncuesta = ResEncuesta::where('dis', $this->respuesta->dis)
                                  ->where('man', $this->respuesta->man)
                                  ->where('pre', $this->respuesta->pre)
                                  ->whereNotIn('id', [$this->respuesta->id])
                                  ->get();
        if($resEncuesta->count()==0){
            $this->codigoRepetido = [];
            return true;
        }
        foreach ($resEncuesta as $key => $repetido) {
            $aux['id'] = $repetido->id;
            $aux['dis_lev'] = $repetido->dis_lev;
            $aux['man_lev'] = $repetido->man_lev;
            $aux['pre_lev'] = $repetido->pre_lev;
            $aux['encuesta_id'] = $repetido->encuesta_id;
            $this->codigoRepetido[] = $aux;
        }
        return false;
    }
}
