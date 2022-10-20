<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Livewire\Component;

class MostrarImage extends Component
{
    public $image_url;
    public ResEncuesta $respuesta;
    public $carpeta;
    protected $listeners = ['recargar_imagen' => 'render'];

    public function render()
    {
        $this->image_url = '';
        $this->seleccionarImagen($this->carpeta);
        // $this->image_url = $this->respuesta->croquis_catastral;
        return view('livewire.encuestas.respuestas.mostrar-image');
    }

    public function seleccionarImagen($opcion)
    {
        switch ($opcion) {
            case 'croquis':
                if ($this->respuesta->croquis_catastral != '') {
                    $this->image_url = $this->respuesta->croquis_catastral;
                }
                break;
            case 'encuestas':
                if ($this->respuesta->ruta_foto_predio != '') {
                    $this->image_url = 'storage/'.$this->respuesta->ruta_foto_predio;
                }
                break;
            default:
                # code...
                break;
        }
    }
}
