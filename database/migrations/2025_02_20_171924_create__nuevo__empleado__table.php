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
        Schema::create('_nuevo__empleado_', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empleado');
            $table->string('apellido_materno');
            $table->string('apellido_paterno');
            $table->string('nombre_banco');
            $table->integer('numero_cuenta');
            $table->string('alias_banco');
            $table->integer('salario');
            $table->string('cargo');
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
        Schema::dropIfExists('_nuevo__empleado_');
    }
};
