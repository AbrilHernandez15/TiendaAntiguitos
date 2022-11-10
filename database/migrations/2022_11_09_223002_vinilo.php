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
        Schema::create('vinilo', function (Blueprint $table) {
            $table->id();
            $table->string('interprete', 150)->nullable();
            $table->string('album', 250)->nullable();
            $table->string('disquera', 250)->nullable();
            $table->date('lanzamiento')->nullable();
            $table->bigInteger('numero_canciones')->nullable();
            $table->bigInteger('cantidad')->nullable();
            $table->bigInteger('precio_compra')->nullable();
            $table->bigInteger('precio_venta')->nullable();
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
