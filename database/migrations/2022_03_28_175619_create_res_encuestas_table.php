<?php

use App\Models\Admin\Encuesta;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_encuestas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('row_id');
            $table->integer('dis')->nullable();
            $table->integer('man')->nullable();
            $table->integer('pre')->nullable();
            $table->integer('subpre')->nullable();
            $table->date('fecha')->nullable();
            $table->string('nombre_usuario')->nullable();
            $table->string('enc_realizada')->nullable();
            $table->integer('dis_lev')->nullable();
            $table->integer('man_lev')->nullable();
            $table->integer('pre_lev')->nullable();
            $table->integer('subpre_lev')->nullable();
            $table->string('centro_urbano')->nullable();
            $table->string('barrio_urbanizacion')->nullable();
            $table->string('direccion_inmu')->nullable();
            $table->string('num_inmu')->nullable();
            $table->string('nomb_razon_social')->nullable();
            $table->string('personeria')->nullable();
            $table->string('titularidad')->nullable();
            $table->string('tipo_titularidad')->nullable();
            $table->string('tipo_doc_iden')->nullable();
            $table->string('num_doc_iden')->nullable();
            $table->string('expedido')->nullable();
            $table->string('num_telefono')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('tit_dominio_ant')->nullable();
            $table->string('doc_adqui')->nullable();
            $table->string('doc_notario_fecha')->nullable();
            $table->string('registro_ddrr')->nullable();
            $table->string('num_matricula')->nullable();
            $table->string('ddrr_asiento')->nullable();
            $table->string('ddrr_lugar')->nullable();
            $table->date('ddrr_fecha')->nullable();
            $table->string('orig_asentamiento')->nullable();
            $table->string('nombre_inmueble')->nullable();
            $table->string('tipo_inmueble')->nullable();
            $table->string('locacion')->nullable();
            $table->string('otra_locacion')->nullable();
            $table->string('ins_catastral')->nullable();
            $table->string('linea_muni_apro')->nullable();
            $table->string('plano_pre_no_apro')->nullable();
            $table->string('plano_emitido_por')->nullable();
            $table->string('zona_homogenea')->nullable();
            $table->string('exclusion_tributaria')->nullable();
            $table->string('exencion_tributaria')->nullable();
            $table->string('ultima_gestion_pagada')->nullable();
            $table->string('pmc_gam')->nullable();
            $table->string('forma_adquisicion')->nullable();
            $table->string('finan_adq_inmueble')->nullable();
            $table->string('otro_tipo_finan')->nullable();
            $table->string('tipo_de_via')->nullable();
            $table->string('topografia')->nullable();
            $table->string('forma')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('frente')->nullable();
            $table->string('fondo')->nullable();
            $table->string('revestimiento_via')->nullable();
            $table->string('ener_electrica')->nullable();
            $table->string('agua_potable')->nullable();
            $table->string('telefono')->nullable();
            $table->string('alcantarillado')->nullable();
            $table->string('gas_domiciliario')->nullable();
            $table->string('du_comercial')->nullable();
            $table->string('du_oficinas')->nullable();
            $table->string('du_residencial')->nullable();
            $table->string('du_industrial')->nullable();
            $table->string('du_servicio_publico')->nullable();
            $table->string('du_recreacion')->nullable();
            $table->string('foto_del_predio')->nullable();
            $table->string('foto_del_predio_url')->nullable();
            $table->string('croquis_catastral')->nullable();
            $table->decimal('super_terreno',10,2,true)->nullable();
            $table->decimal('super_edificacion',10,2,true)->nullable();
            $table->decimal('super_construccion',10,2,true)->nullable();
            $table->decimal('super_mejoras',10,2,true)->nullable();
            $table->string('ruta_foto_predio')->nullable();
            $table->boolean('validado')->default(0);
            $table->timestamps();
            $table->foreignIdFor(Encuesta::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('res_encuestas');
    }
}
