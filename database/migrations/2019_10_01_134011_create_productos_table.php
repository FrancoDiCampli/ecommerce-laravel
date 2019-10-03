<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codproducto')->unique();
            $table->string('producto')->unique();
            $table->string('slug')->unique();
            $table->string('detalle')->nullable();
            $table->float('precio');
            $table->integer('cantidad');
            $table->text('descripcion');
            $table->string('foto');
            $table->boolean('promo');
            $table->float('descuento');
            $table->boolean('destacado');

            $table->unsignedBigInteger('categoria_id');

            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
