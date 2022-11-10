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
        Schema::create('cdcasete', function (Blueprint $table) {
            $table->id();
            $table->string('interprete', 150)->nullable();
            $table->string('descripcion', 250)->nullable();
            $table->bigInteger('numero_canciones')->nullable();
            $table->bigInteger('cantidad')->nullable();
            $table->bigInteger('precio_compra')->nullable();
            $table->bigInteger('precio_venta')->nullable();
            $table->date('fecha_ingreso')->nullable();
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
