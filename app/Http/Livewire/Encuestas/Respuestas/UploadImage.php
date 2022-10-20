<?php

namespace App\Http\Livewire\Encuestas\Respuestas;

use App\Models\Admin\ResEncuesta;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class UploadImage extends Component
{
    use WithFileUploads;

    public $image;
    public ResEncuesta $respuesta;
    public $idenFile, $carpeta;


    protected $rules =[
        'image'=>'required|image|max:5120'
    ];

    public function mount()
    {
        $this->idenFile = rand();
    }
    public function render()
    {
        return view('livewire.encuestas.respuestas.upload-image');
    }

    public function save()
    {
        $this->validate();
        $this->borrarImg($this->carpeta);
        $this->guardarImg($this->carpeta);
        $this->idenFile = rand();
        $this->reset(['image']);
        $this->emit('alert', ['type'=>'success','message'=>'La imagen se guardo correctamente']);
        $this->emit('recargar_imagen');
    }

    public function borrarImg($opcion)
    {
        switch ($opcion) {
            case 'croquis':
                if ($this->respuesta->croquis_catastral != '') {
                    Storage::delete('public/'.$this->carpeta.'/'.$this->respuesta->croquis_catastral);
                }
                break;
            case 'encuestas':
                if ($this->respuesta->ruta_foto_predio != '') {
                    Storage::delete('public/'.$this->carpeta.'/'.$this->respuesta->ruta_foto_predio);
                }
                break;
            
            default:
                # code...
                break;
        }
    }

    public function guardarImg($opcion)
    {
        $name_img = $this->respuesta->row_id.'_'.$this->respuesta->dis.'-'.$this->respuesta->man.'-'.$this->respuesta->pre;
        $ext_image = $this->image->extension();
        switch ($opcion) {
            case 'croquis':
                $this->respuesta->croquis_catastral = 'storage/'.$this->image->storeAs($this->carpeta,$name_img.'.'.$ext_image,'public');
                break;
            case 'encuestas':
                $this->respuesta->ruta_foto_predio = $this->image->storeAs($this->carpeta,$name_img.'.'.$ext_image,'public');
                break;
            default:
                # code...
                break;
        }
        // return $nombre_img;
        $this->respuesta->save();

    }
}
