<?php

use App\Models\Admin\ResEncuesta;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_bloques', function (Blueprint $table) {
            $table->id();
            $table->integer('num_bloque')->nullable();
            $table->integer('num_plantas')->nullable();
            $table->integer('anio_contrucion')->nullable();
            $table->string('tipologia_edif')->nullable();
            $table->string('estado_consevacion')->nullable();
            $table->decimal('superficie_bloque', 10, 2, true)->nullable();
            $table->integer('cimientos')->nullable();
            $table->integer('estructuras')->nullable();
            $table->integer('muros_tabiques')->nullable();
            $table->integer('reves_muro_ext')->nullable();
            $table->integer('cubierta_techo')->nullable();
            $table->integer('reves_muro_int')->nullable();
            $table->integer('acabado_pisos')->nullable();
            $table->integer('carpinteria')->nullable();
            $table->integer('electricidad')->nullable();
            $table->integer('agua')->nullable();
            $table->integer('alcantarillado')->nullable();
            $table->integer('art_sanitarios')->nullable();
            $table->integer('art_concina')->nullable();
            $table->integer('suma_servicios')->nullable();
            $table->timestamps();
            $table->foreignIdFor(ResEncuesta::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('res_bloques');
    }
}
