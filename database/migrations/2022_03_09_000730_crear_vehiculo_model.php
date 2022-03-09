<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->integer('DNI');
            $table->string('placa');
            $table->integer('Tipo_v');
            $table->date('Fecha_e');
            $table->date('Fecha_s');
            $table->dateTime('H_Entrada');
            $table->dateTime('H_Salida');
            $table->integer('p_p');
            
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
        //
    }
};
