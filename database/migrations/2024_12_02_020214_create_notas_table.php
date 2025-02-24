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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('no_deNota'); // no.deNota varchar
            $table->string('contacto'); // contacto varchar
            $table->string('telefono'); // telefono varchar
            $table->date('fecha'); // fecha date
            $table->string('diseñadorCargo'); // diseñadorCargo varchar
            $table->string('descripcion'); // descripcion varchar
            $table->string('entregaEn'); // entregaEn varchar
            $table->string('tipopago'); // Tipopago varchar
            $table->float('iva'); // iva float
            $table->float('total'); // total float
            $table->float('anticipo'); // anticipo float
            $table->float('porPagar'); // porPagar float
            $table->integer('cantidad'); // cantidad int
            $table->string('descProducto'); // cantidad int
            $table->float('costo'); // costo float
            $table->string('NoFactura');
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
        Schema::dropIfExists('notas');
    }
};
