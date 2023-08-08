<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMCaracteristicasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_caracteristicas_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('producto');
            $table->string('caracteristica');
            $table->foreign('producto')->references('id')->on('m_productos')->onDelete('cascade');
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
        Schema::dropIfExists('m_caracteristicas_productos');
    }
}
