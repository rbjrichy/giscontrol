<?php
namespace App\Http\Traits;

use App\Models\Imagen;
use Illuminate\Support\Facades\Storage;

trait ImagenUtil {

    public function eliminarImagenes($imagenesIds)
    {
        foreach ($imagenesIds as $imagenId) {
            $objImagen = Imagen::find($imagenId);
            if($objImagen->ruta != '')
            {
                Storage::delete('public/archivos_img/'.$objImagen->ruta);
            }
            $objImagen->delete();
        }
    }
}