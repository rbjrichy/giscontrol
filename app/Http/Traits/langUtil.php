<?php
namespace App\Http\Traits;
trait langUtil {
    public function getNombre()
    {
        $lang = session()->get('lang');
        $nombre = "";
        switch ($lang) {
            case 'es':
                $nombre = $this->nombre_es;
                break;
            case 'en':
                $nombre = $this->nombre_en;
                break;
            case 'pt-BR':
                $nombre = $this->nombre_pt;
                break;
        }
        return $nombre;
    }
    public function getDescripcion()
    {
        $lang = session()->get('lang');
        $nombre = "";
        switch ($lang) {
            case 'es':
                $nombre = $this->descripcion_es;
                break;
            case 'en':
                $nombre = $this->descripcion_en;
                break;
            case 'pt-BR':
                $nombre = $this->descripcion_pt;
                break;
        }
        return $nombre;
    }

    public function getNameLlaveForanea($clase)
    {
        switch ($clase) {
            case 'categoria':
                $llave = "categoria_id";
                break;
            case 'producto':
                $llave = "producto_id";
                break;
            case 'noticia':
                $llave = "noticia_id";
                break;
            case 'servicio':
                $llave = "servicio_id";
                break;
            case 'proyecto':
                $llave = "proyecto_id";
                break;
        }
        return $llave;
    }
    public function getLangAtributo($atributo)
    {
        $lang = session()->get('lang');
        $nombreAtributo = "";
        switch ($lang) {
            case 'es':
                $nombreAtributo = $this->obtenerAtributo($atributo, 'es');
                break;
            case 'en':
                $nombreAtributo = $this->obtenerAtributo($atributo, 'en');
                break;
            case 'pt-BR':
                $nombreAtributo = $this->obtenerAtributo($atributo, 'pt');
                break;
        }
        return $nombreAtributo;
    }

    private function obtenerAtributo($atributo,$ext)
    {
        switch ($atributo) {
            case 'nombre':
                $nomAtri = 'nombre_'.$ext;
                break;
            case 'descripcion':
                $nomAtri = 'descripcion_'.$ext;
                break;
        }
        return $nomAtri;
    }
}