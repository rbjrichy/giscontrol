<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResEncuesta extends Model
{
    use HasFactory;
    protected $dates = ['fecha','ddrr_fecha'];
    protected $fillable = [
        'dis',
        'man',
        'pre',
        'subpre',
        'fecha',
        'nombre_usuario',
        'enc_realizada',
        'dis_lev',
        'man_lev',
        'pre_lev',
        'subpre_lev',
        'centro_urbano',
        'barrio_urbanizacion',
        'direccion_inmu',
        'num_inmu',
        'nomb_razon_social',
        'personeria',
        'titularidad',
        'tipo_titularidad',
        'tipo_doc_iden',
        'num_doc_iden',
        'expedido',
        'num_telefono',
        'whatsapp',
        'tit_dominio_ant',
        'doc_adqui',
        'doc_notario_fecha',
        'registro_ddrr',
        'num_matricula',
        'ddrr_asiento',
        'ddrr_lugar',
        'ddrr_fecha',
        'orig_asentamiento',
        'nombre_inmueble',
        'tipo_inmueble',
        'locacion',
        'otra_locacion',
        'ins_catastral',
        'linea_muni_apro',
        'plano_pre_no_apro',
        'plano_emitido_por',
        'zona_homogenea',
        'exclusion_tributaria',
        'exencion_tributaria',
        'ultima_gestion_pagada',
        'pmc_gam',
        'forma_adquisicion',
        'finan_adq_inmueble',
        'otro_tipo_finan',
        'tipo_de_via',
        'topografia',
        'forma',
        'ubicacion',
        'frente',
        'fondo',
        'revestimiento_via',
        'ener_electrica',
        'agua_potable',
        'telefono',
        'alcantarillado',
        'gas_domiciliario',
        'du_comercial',
        'du_oficinas',
        'du_residencial',
        'du_industrial',
        'du_servicio_publico',
        'du_recreacion',
        'foto_del_predio',
        'foto_del_predio_url',
        'croquis_catastral',
        'super_terreno',
        'super_edificacion',
        'super_construccion',
        'super_mejoras',
    ];

    public function bloques()
    {
        return $this->hasMany(ResBloque::class);
    }

    public function mejoras()
    {
        return $this->hasMany(ResMejora::class);
    }

    // public function getDdrrFechaAttribute($value)
    // {
    //     $this->attributes['ddrr_fecha'] = Carbon::createFromDate($value)->format('d-m-Y');
    // }

    // public function setDdrrFechaAttribute($value)
    // {
    //     // $this->attributes['ddrr_fecha'] = Carbon::createFromFormat(format:'d-m-Y', $value);
    //     dd($value);
    //     $this->attributes['ddrr_fecha'] = Carbon::createFromDate($value)->format('Y-m-d');
    //     // dd($this->attributes['ddrr_fecha']);
    // }
}
