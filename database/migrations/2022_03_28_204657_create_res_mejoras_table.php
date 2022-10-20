<?php

use App\Models\Admin\ResEncuesta;
use App\Models\Admin\ResMejora;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResMejorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_mejoras', function (Blueprint $table) {
            $table->id();
            $table->integer('num_mejora')->nullable();
            $table->string('nombre_mejora')->nullable();
            $table->string('tipologia_mejora')->nullable();
            $table->integer('anio_const_mejora')->nullable();
            $table->string('consevacion_mejora')->nullable();
            $table->decimal('superficie_mejora', 10, 2, true)->nullable();
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
        Schema::dropIfExists('res_mejoras');
    }
}
