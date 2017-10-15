<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('acadspace')->create('TBL_Asistencias', function (Blueprint $table) {
            $table->increments('PK_ASIS_Id_Registro')->unsigned()->unique();
            $table->integer('ASIS_Id_Identificacion')->unsigned();
            $table->string('ASIS_Espacio_Academico',100);
            $table->string('ASIS_Espacio',50);
            $table->string('ASIS_Tipo_Practica',50)->nullable();
            $table->integer('ASIS_Id_Carrera')->unsigned()->nullable();
            $table->string('ASIS_Nombre_Materia',50)->nullable();
            $table->integer('ASIS_Cant_Estudiantes')->unsigned()->nullable();
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
        Schema::dropIfExists('asistencias');
    }
}
