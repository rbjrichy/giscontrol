<?php

namespace App\Imports;

use App\Models\Admin\Encuesta;
use App\Models\Admin\ResBloque;
use App\Models\Admin\ResEncuesta;
use App\Models\Admin\ResMejora;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToCollection;

class EncuestasExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    private $encuesta_id;
    function __construct($encuesta_id)
    {
        $this->encuesta_id = $encuesta_id;
    }

    private $resEncuesta =  array(
        'fecha' => 0,
        'nombre_usuario' => 1,
        'enc_realizada' => 2,
        'dis_lev' => 3,
        'man_lev' => 4,
        'pre_lev' => 5,
        'centro_urbano' => 6,
        'barrio_urbanizacion' => 7,
        'direccion_inmu' => 8,
        'num_inmu' => 9,
        'nomb_razon_social' => 10,
        'personeria' => 11,
        'titularidad' => 12,
        'tipo_titularidad' => 13,
        'tipo_doc_iden' => 14,
        'num_doc_iden' => 15,
        'expedido' => 16,
        'tit_dominio_ant' => 17,
        'doc_adqui' => 18,
        'doc_notario_fecha' => 19,
        'registro_ddrr' => 20,
        'num_matricula' => 21,
        'ddrr_asiento' => 22,
        'ddrr_lugar' => 23,
        'ddrr_fecha' => 24,
        'orig_asentamiento' => 25,
        'nombre_inmueble' => 26,
        'tipo_inmueble' => 27,
        'locacion' => 28,
        'otra_locacion' => 29,
        'ins_catastral' => 30,
        'linea_muni_apro' => 31,
        'plano_pre_no_apro' => 32,
        'plano_emitido_por' => 33,
        'zona_homogenea' => 34,
        'exclusion_tributaria' => 35,
        'exencion_tributaria' => 36,
        'ultima_gestion_pagada' => 37,
        'pmc_gam' => 38,
        'forma_adquisicion' => 39,
        'finan_adq_inmueble' => 40,
        'otro_tipo_finan' => 41,
        'tipo_de_via' => 42,
        'topografia' => 43,
        'forma' => 44,
        'ubicacion' => 45,
        'frente' => 46,
        'fondo' => 47,
        'revestimiento_via' => 48,
        'ener_electrica' => 49,
        'agua_potable' => 50,
        'telefono' => 51,
        'alcantarillado' => 52,
        'gas_domiciliario' => 53,
        'du_comercial' => 66,
        'du_oficinas' => 67,
        'du_residencial' => 68,
        'du_industrial' => 69,
        'du_servicio_publico' => 70,
        'du_recreacion' => 71,
        'foto_del_predio' => 129,
        'foto_del_predio_url' => 130,
        'row_id' => 155,
    );

    private $mejoras = [
        'mejora_1' => 72,
        'mejora_2' => 73,
        'mejora_3' => 74
    ];

    private $bloques = [
        'bloque_1' => 54,
        'bloque_2' => 55,
        'bloque_3' => 56
    ];

    private $datosMejoras = [
        'nombre_mejora_1' => 75,
        'tipologia_mejora_1' => 76,
        'anio_const_mejora_1' => 77,
        'consevacion_mejora_1' => 78,
        'superficie_mejora_1' => 79,
        'nombre_mejora_2' => 80,
        'tipologia_mejora_2' => 81,
        'anio_const_mejora_2' => 82,
        'consevacion_mejora_2' => 83,
        'superficie_mejora_2' => 84,
        'nombre_mejora_3' => 85,
        'tipologia_mejora_3' => 86,
        'anio_const_mejora_3' => 87,
        'consevacion_mejora_3' => 88,
        'superficie_mejora_3' => 89,
    ];

    private $datosBloques = [
        'num_plantas_1' => 57,
        'anio_contrucion_1' => 58,
        'estado_consevacion_1' => 59,
        'num_plantas_2' => 60,
        'anio_contrucion_2' => 61,
        'estado_consevacion_2' => 62,
        'num_plantas_3' => 63,
        'anio_contrucion_3' => 64,
        'estado_consevacion_3' => 65,
        'cimientos_1' => 90,
        'estructuras_1' => 91,
        'muros_tabiques_1' => 92,
        'reves_muro_ext_1' => 93,
        'cubierta_techo_1' => 94,
        'reves_muro_int_1' => 95,
        'acabado_pisos_1' => 96,
        'carpinteria_1' => 97,
        'electricidad_1' => 98,
        'agua_1' => 99,
        'alcantarillado_1' => 100,
        'art_sanitarios_1' => 101,
        'art_concina_1' => 102,
        'cimientos_2' => 103,
        'estructuras_2' => 104,
        'muros_tabiques_2' => 105,
        'reves_muro_ext_2' => 106,
        'cubierta_techo_2' => 107,
        'reves_muro_int_2' => 108,
        'acabado_pisos_2' => 109,
        'carpinteria_2' => 110,
        'electricidad_2' => 111,
        'agua_2' => 112,
        'alcantarillado_2' => 113,
        'art_sanitarios_2' => 114,
        'art_concina_2' => 115,
        'cimientos_3' => 116,
        'estructuras_3' => 117,
        'muros_tabiques_3' => 118,
        'reves_muro_ext_3' => 119,
        'cubierta_techo_3' => 120,
        'reves_muro_int_3' => 121,
        'acabado_pisos_3' => 122,
        'carpinteria_3' => 123,
        'electricidad_3' => 124,
        'agua_3' => 125,
        'alcantarillado_3' => 126,
        'art_sanitarios_3' => 127,
        'art_concina_3' => 128,
    ];


    public function collection(Collection $collection)
    {
        $num_reg_insert = 0;
        $num_reg_read = 0;
        foreach ($collection as $key => $value) {
            if($key == 0) {//salta la primera fila
                continue;
            }
            // dd($value[$this->resEncuesta['row_id']]);
            $num_reg_read++;
            if ($this->insertarRow($value[$this->resEncuesta['row_id']])) {
                $num_reg_insert++;
                $objResEncuenta = $this->crearRespuesta($value, $this->encuesta_id); //crea una respuesta
                /** crear las mejoras */
                $numMejora = 0;
                foreach ($this->mejoras as $f_mejora)
                {
                    if ($value[$f_mejora] == 'si'){
                        // echo "crear mejora" . '<br>';
                        ++$numMejora;
                        $this->crearMejora($value, $this->datosMejoras, $objResEncuenta->id, $numMejora);
                    }
                }
                /** crear los bloques */
                $numBloque = 0;
                foreach ($this->bloques as $f_bloque)
                {
                    if ($value[$f_bloque] == 'si'){
                        // echo "crear mejora" . '<br>';
                        ++$numBloque;
                        $this->crearBloque($value, $this->datosBloques, $objResEncuenta->id, $numBloque);
                    }
                }
            }  
        }
        session(['num_reg_insert' => $num_reg_insert]);
        session(['num_reg_read' => $num_reg_read]);
    }

    public function insertarRow($row_id)
    {
        $fila = ResEncuesta::where('row_id', $row_id)->first();
        if(is_null($fila)){
            return true;
        }
        return false;
    }

    private function crearRespuesta($fila, $encuesta_id)
    {
        // dd($fila[$this->resEncuesta['row_id']]);
        $objRespuesta = new ResEncuesta;
        $objRespuesta->row_id = $fila[$this->resEncuesta['row_id']];
        $objRespuesta->fecha = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($fila[$this->resEncuesta['fecha']]);
        $objRespuesta->nombre_usuario = $fila[$this->resEncuesta['nombre_usuario']];
        $objRespuesta->enc_realizada = $fila[$this->resEncuesta['enc_realizada']];
        $objRespuesta->dis_lev = $fila[$this->resEncuesta['dis_lev']];
        $objRespuesta->man_lev = $fila[$this->resEncuesta['man_lev']];
        $objRespuesta->pre_lev = $fila[$this->resEncuesta['pre_lev']];
        $objRespuesta->centro_urbano = $fila[$this->resEncuesta['centro_urbano']];
        $objRespuesta->barrio_urbanizacion = $fila[$this->resEncuesta['barrio_urbanizacion']];
        $objRespuesta->direccion_inmu = $fila[$this->resEncuesta['direccion_inmu']];
        $objRespuesta->num_inmu = $fila[$this->resEncuesta['num_inmu']];
        $objRespuesta->nomb_razon_social = $fila[$this->resEncuesta['nomb_razon_social']];
        $objRespuesta->personeria = $fila[$this->resEncuesta['personeria']];
        $objRespuesta->titularidad = $fila[$this->resEncuesta['titularidad']];
        $objRespuesta->tipo_titularidad = $fila[$this->resEncuesta['tipo_titularidad']];
        $objRespuesta->tipo_doc_iden = $fila[$this->resEncuesta['tipo_doc_iden']];
        $objRespuesta->num_doc_iden = $fila[$this->resEncuesta['num_doc_iden']];
        $objRespuesta->expedido = $fila[$this->resEncuesta['expedido']];
        $objRespuesta->tit_dominio_ant = $fila[$this->resEncuesta['tit_dominio_ant']];
        $objRespuesta->doc_adqui = $fila[$this->resEncuesta['doc_adqui']];
        $objRespuesta->doc_notario_fecha = $fila[$this->resEncuesta['doc_notario_fecha']];
        $objRespuesta->registro_ddrr = $fila[$this->resEncuesta['registro_ddrr']];
        $objRespuesta->num_matricula = $fila[$this->resEncuesta['num_matricula']];
        $objRespuesta->ddrr_asiento = $fila[$this->resEncuesta['ddrr_asiento']];
        $objRespuesta->ddrr_lugar = $fila[$this->resEncuesta['ddrr_lugar']];
        $objRespuesta->ddrr_fecha = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($fila[$this->resEncuesta['ddrr_fecha']]);
        $objRespuesta->orig_asentamiento = $fila[$this->resEncuesta['orig_asentamiento']];
        $objRespuesta->nombre_inmueble = $fila[$this->resEncuesta['nombre_inmueble']];
        $objRespuesta->tipo_inmueble = $fila[$this->resEncuesta['tipo_inmueble']];
        $objRespuesta->locacion = $fila[$this->resEncuesta['locacion']];
        $objRespuesta->otra_locacion = $fila[$this->resEncuesta['otra_locacion']];
        $objRespuesta->ins_catastral = $fila[$this->resEncuesta['ins_catastral']];
        $objRespuesta->linea_muni_apro = $fila[$this->resEncuesta['linea_muni_apro']];
        $objRespuesta->plano_pre_no_apro = $fila[$this->resEncuesta['plano_pre_no_apro']];
        $objRespuesta->plano_emitido_por = $fila[$this->resEncuesta['plano_emitido_por']];
        $objRespuesta->zona_homogenea = $fila[$this->resEncuesta['zona_homogenea']];
        $objRespuesta->exclusion_tributaria = $fila[$this->resEncuesta['exclusion_tributaria']];
        $objRespuesta->exencion_tributaria = $fila[$this->resEncuesta['exencion_tributaria']];
        $objRespuesta->ultima_gestion_pagada = $fila[$this->resEncuesta['ultima_gestion_pagada']];
        $objRespuesta->pmc_gam = $fila[$this->resEncuesta['pmc_gam']];
        $objRespuesta->forma_adquisicion = $fila[$this->resEncuesta['forma_adquisicion']];
        $objRespuesta->finan_adq_inmueble = $fila[$this->resEncuesta['finan_adq_inmueble']];
        $objRespuesta->otro_tipo_finan = $fila[$this->resEncuesta['otro_tipo_finan']];
        $objRespuesta->tipo_de_via = $fila[$this->resEncuesta['tipo_de_via']];
        $objRespuesta->topografia = $fila[$this->resEncuesta['topografia']];
        $objRespuesta->forma = $fila[$this->resEncuesta['forma']];
        $objRespuesta->ubicacion = $fila[$this->resEncuesta['ubicacion']];
        $objRespuesta->frente = $fila[$this->resEncuesta['frente']];
        $objRespuesta->fondo = $fila[$this->resEncuesta['fondo']];
        $objRespuesta->revestimiento_via = $fila[$this->resEncuesta['revestimiento_via']];
        $objRespuesta->ener_electrica = $fila[$this->resEncuesta['ener_electrica']];
        $objRespuesta->agua_potable = $fila[$this->resEncuesta['agua_potable']];
        $objRespuesta->telefono = $fila[$this->resEncuesta['telefono']];
        $objRespuesta->alcantarillado = $fila[$this->resEncuesta['alcantarillado']];
        $objRespuesta->gas_domiciliario = $fila[$this->resEncuesta['gas_domiciliario']];
        $objRespuesta->du_comercial = $fila[$this->resEncuesta['du_comercial']];
        $objRespuesta->du_oficinas = $fila[$this->resEncuesta['du_oficinas']];
        $objRespuesta->du_residencial = $fila[$this->resEncuesta['du_residencial']];
        $objRespuesta->du_industrial = $fila[$this->resEncuesta['du_industrial']];
        $objRespuesta->du_servicio_publico = $fila[$this->resEncuesta['du_servicio_publico']];
        $objRespuesta->du_recreacion = $fila[$this->resEncuesta['du_recreacion']];
        $objRespuesta->foto_del_predio = $fila[$this->resEncuesta['foto_del_predio']];
        $objRespuesta->foto_del_predio_url = $fila[$this->resEncuesta['foto_del_predio_url']];
        $objRespuesta->encuesta_id = $encuesta_id;
        // dd($objRespuesta);
        $objRespuesta->save();
        return $objRespuesta;
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

    public function crearMejora($fila, $daMejora, $res_encuesta_id, $num_mejora)
    {
        $objMejora = new ResMejora;
        $objMejora->num_mejora = $num_mejora;
        $objMejora->nombre_mejora = $fila[$daMejora['nombre_mejora_'.$num_mejora]];
        $objMejora->tipologia_mejora = $fila[$daMejora['tipologia_mejora_'.$num_mejora]];
        $objMejora->anio_const_mejora = $fila[$daMejora['anio_const_mejora_'.$num_mejora]];
        $objMejora->consevacion_mejora = $fila[$daMejora['consevacion_mejora_'.$num_mejora]];
        $objMejora->superficie_mejora = $fila[$daMejora['superficie_mejora_'.$num_mejora]];
        $objMejora->res_encuesta_id = $res_encuesta_id;
        $objMejora->save();
    }

    public function crearBloque($fila, $daBloques, $res_encuesta_id, $numBLoque)
    {
        $objBloque = new ResBloque();
        $objBloque->num_bloque = $numBLoque;
        $objBloque->num_plantas = $fila[$daBloques['num_plantas_'.$numBLoque]];
        $objBloque->anio_contrucion = $fila[$daBloques['anio_contrucion_'.$numBLoque]];
        $objBloque->estado_consevacion = $fila[$daBloques['estado_consevacion_'.$numBLoque]];
        $objBloque->cimientos = $fila[$daBloques['cimientos_'.$numBLoque]];
        $objBloque->estructuras = $fila[$daBloques['estructuras_'.$numBLoque]];
        $objBloque->muros_tabiques = $fila[$daBloques['muros_tabiques_'.$numBLoque]];
        $objBloque->reves_muro_ext = $fila[$daBloques['reves_muro_ext_'.$numBLoque]];
        $objBloque->cubierta_techo = $fila[$daBloques['cubierta_techo_'.$numBLoque]];
        $objBloque->reves_muro_int = $fila[$daBloques['reves_muro_int_'.$numBLoque]];
        $objBloque->acabado_pisos = $fila[$daBloques['acabado_pisos_'.$numBLoque]];
        $objBloque->carpinteria = $fila[$daBloques['carpinteria_'.$numBLoque]];
        $objBloque->electricidad = $fila[$daBloques['electricidad_'.$numBLoque]];
        $objBloque->agua = $fila[$daBloques['agua_'.$numBLoque]];
        $objBloque->alcantarillado = $fila[$daBloques['alcantarillado_'.$numBLoque]];
        $objBloque->art_sanitarios = $fila[$daBloques['art_sanitarios_'.$numBLoque]];
        $objBloque->art_concina = $fila[$daBloques['art_concina_'.$numBLoque]];
        $objBloque->res_encuesta_id = $res_encuesta_id;
        $objBloque->save();
    }
}
