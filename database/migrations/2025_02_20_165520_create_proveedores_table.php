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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->string('contacto');
            $table->text('vende');
            $table->longText('web');
            $table->string('titular');
            $table->string('nombre_banco');
            $table->string('numero_cuenta');
            $table->string('rfc');
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
        Schema::dropIfExists('proveedores');
    }
};
