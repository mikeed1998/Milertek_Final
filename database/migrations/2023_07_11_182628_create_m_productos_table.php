<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('categoria');
            $table->string('nombre');
            $table->text('descripcion');
            $table->text('ficha_tecnica');
            $table->text('foto_principal');
            $table->foreign('categoria')->references('id')->on('m_categorias')->onDelete('cascade');
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
        Schema::dropIfExists('m_productos');
    }
}
