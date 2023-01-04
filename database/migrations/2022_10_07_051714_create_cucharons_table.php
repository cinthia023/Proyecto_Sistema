<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCucharonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cucharons', function (Blueprint $table) {
            $table->id();
            $table->string("numero");
            $table->string("compania");
            $table->string("caracteristicas");
            $table->string("fecha_ingreso");
            $table->string("fecha_entrega");
            $table->string("procedimiento");
            $table->string("entrada_cucharon");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cucharons');
    }
}
