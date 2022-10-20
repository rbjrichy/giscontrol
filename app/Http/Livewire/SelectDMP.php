<?php

namespace App\Http\Livewire;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class SelectDMP extends Component
{
    public $selectedDis, $selectedMan, $selectedPre;
    public $respuesta, $distritos, $manzanos, $predios;
    public $accion = '';
    public function render()
    {
        // $distritos = ResEncuesta::select('dis_lev')->distinct()->pluck('dis_lev','dis_lev');
        // $this->manzanos = ResEncuesta::where('dis_lev', $this->respuesta->dis_lev)->select('man_lev')->distinct()->pluck('man_lev','man_lev');
        // $this->predios = ResEncuesta::where('dis_lev', $this->respuesta->dis_lev)
        //                         ->where('man_lev', $this->respuesta->man_lev)
        //                         ->select('pre_lev')->distinct()->pluck('pre_lev','pre_lev');
        return view('livewire.select-d-m-p');
    }

    public function mount()
    {
        $this->distritos = ResEncuesta::select('dis_lev')->distinct()->pluck('dis_lev','dis_lev');
        $this->manzanos = ResEncuesta::where('dis_lev', $this->respuesta->dis_lev)->select('man_lev')->distinct()->pluck('man_lev','man_lev');
        $this->predios = ResEncuesta::where('dis_lev', $this->respuesta->dis_lev)
                                ->where('man_lev', $this->respuesta->man_lev)
                                ->select('pre_lev')->pluck('pre_lev','pre_lev');
        $this->selectedDis = $this->respuesta->dis_lev;
        $this->selectedMan = $this->respuesta->man_lev;
        $this->selectedPre = $this->respuesta->pre_lev;
    }

    public function updatedselectedDis($dis_lev)
    {
        $this->selectedDis = $dis_lev;
        $this->selectedMan = null;
        $this->selectedPre = null;
        $this->manzanos = collect();
        $this->predios = collect();
        if (is_numeric($dis_lev)) {
            $this->manzanos = ResEncuesta::where('dis_lev', $dis_lev)->select('man_lev')->distinct()->pluck('man_lev','man_lev');
        }
    }

    public function updatedselectedMan($man_lev)
    {
        $this->selectedMan = $man_lev;
        $this->selectedPre = null;
        $this->predios = collect();
        if (is_numeric($this->selectedDis)&& is_numeric($man_lev)) {
            $this->predios = ResEncuesta::where('dis_lev', $this->selectedDis)->where('man_lev', $man_lev)->select('pre_lev')->pluck('pre_lev','pre_lev');
        }
    }
    public function updatedselectedPre($pre_lev)
    {
        $this->selectedPre = $pre_lev;
        if (is_numeric($this->selectedDis) && is_numeric($this->selectedMan) && is_numeric($this->selectedPre)) {
            $resEncuesta = ResEncuesta::where('dis_lev', $this->selectedDis)
                                      ->where('man_lev', $this->selectedMan)
                                      ->where('pre_lev', $this->selectedPre)
                                      ->first();
            switch ($this->accion) {
                // case 'show':
                //     $rutename = 'admin.encuesta.respuesta.show';
                //     break;
                case 'editar':
                    $rutename = 'admin.encuesta.respuesta.editar';
                    break;
                default:
                    $rutename = 'admin.encuesta.respuesta.show';
                    break;
            }
            return redirect()->route($rutename, [$resEncuesta->encuesta_id, $resEncuesta->id]);
        }
        // $this->predios = ResEncuesta::where('dis_lev', $this->selectedDis)->where('pre_lev', $pre_lev)->select('pre_lev')->distinct()->pluck('pre_lev','pre_lev');
    }
}
