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
            $table->id();
            $table->string('nombre');

            $table->unsignedBigInteger('linea_id');
            $table->foreign('linea_id')->references('id')->on('lineas');

            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->string('color');
            $table->string('imagen')->nullable();
            $table->string('precio');
            $table->string('fecha_ini')->nullable();
            $table->enum('status',['VALID','CANCELED'])->default('VALID');

            $table->string('ean');
            
            $table->string('code_father');
            $table->string('code_mother');
            $table->string('code_son');
            
            $table->softDeletes();
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
        Schema::dropIfExists('productos');
    }
}
