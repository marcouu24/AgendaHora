<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas', function (Blueprint $table) {
            $table->id();
            $table->date("dia");
            $table->string("hora");
            $table->string("rut_cliente");
            $table->string("nombre_cliente");
            $table->string("apellido_cliente");
            $table->string("celular_cliente");
            $table->string("nombre_barbero");
            $table->string("nombre_servicio");
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
        Schema::dropIfExists('horas');
    }
}
