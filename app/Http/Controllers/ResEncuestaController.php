<?php

namespace App\Http\Controllers;

use App\Models\Admin\Encuesta;
use App\Models\Admin\ResEncuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ResEncuestaController extends Controller
{
    public function index($encuesta_id)
    {
        $encuesta = Encuesta::find($encuesta_id);
        $respuestas = ResEncuesta::where('encuesta_id', $encuesta_id)->orderByRaw('dis_lev, man_lev, pre_lev asc')->get();
        // dd($respuestas);
        return view('encuestas.respuestas.index')->with(compact('respuestas','encuesta'));
    }

    public function show($encuesta_id, $respuesta_id)
    {
        $respuesta = ResEncuesta::with('bloques', 'mejoras')->find($respuesta_id);
        $encuesta = Encuesta::find($encuesta_id);
        return view('encuestas.respuestas.show')->with(compact('respuesta', 'encuesta'));
    }

    public function editar($encuesta_id, $respuesta_id)
    {
        $respuesta = ResEncuesta::with('bloques', 'mejoras')->find($respuesta_id);
        $encuesta = Encuesta::find($encuesta_id);
        return view('encuestas.respuestas.editar')->with(compact('respuesta', 'encuesta'));
    }

    public function descargarImagen($resEncuestaId)
    {
        $resEncuesta = ResEncuesta::find($resEncuestaId);
        $ruta = $this->guardarImagen($resEncuesta->foto_del_predio_url, $resEncuesta->foto_del_predio);
        $resEncuesta->ruta_foto_predio = $ruta;
        $resEncuesta->save();
        return redirect()->route('admin.encuesta.respuesta.show',[$resEncuesta->encuesta_id, $resEncuesta->id]);
    }

    public function guardarImagen($url_predio,$nombreArchivo)
    {
        $options = array(
            "http" => array(
                "method"=> "GET",
                "header" => "Authorization: Basic "  . base64_encode("rbjrichy:35-1083kobo")
                )
             );
        $contexto = stream_context_create($options);
        // Storage::putFileAs('photos', new File('/path/to/photo'), 'photo.jpg');
        $imagen = file_get_contents($url_predio, false, $contexto);
        $newFileName = rand(10000,99999).'_'.$nombreArchivo;
        Storage::put('public/encuestas/'.$newFileName,$imagen);
        return 'encuestas/'.$newFileName;
    }

    public function globalEdit(Encuesta $encuesta)
    {
        return view('encuestas.global_edit')->with(compact('encuesta'));
    }

    public function zonaHomogeniaShow(Encuesta $encuesta)
    {
        $man_error = ResEncuesta::whereNull('dis')
                                ->whereNull('man')
                                ->count();
        if ($man_error>0) {
            session(['msj-warning'=>'Existen ' .$man_error . ' predios que no tienen codigo catastral vigente']);
        }
        return view('encuestas.zona_homogenea')->with(compact('encuesta'));
    }

    public function imprimirShow(ResEncuesta $respuesta)
    {
        return view('encuestas.respuestas.print_show')->with(compact('respuesta'));
    }
}
