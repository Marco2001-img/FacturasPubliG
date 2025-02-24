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
        Schema::create('_clientes_', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->string('rfc')->nullable();
            $table->string('contacto');
            $table->integer('telefono');
            $table->text('email')->nullable();
            $table->text('calle')->nullable();
            $table->text('No_exterior')->nullable();
            $table->string('No_interior')->nullable();
            $table->string('entre_calle')->nullable();
            $table->string('Y_calle')->nullable();
            $table->string('codigo_postal')->nullable();

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
        Schema::dropIfExists('_clientes_');
    }
};
