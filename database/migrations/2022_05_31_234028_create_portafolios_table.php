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
        /* tablas de la base de datos, tabla portafolios, campos id,etc */
        Schema::create('portafolios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); /* varchar: nombre,longuitud */
            $table->string('descripcion');
            $table->string('categoria');
            $table->string('imagen');
            $table->string('url');
            $table->timestamps(); /* crea dos columnas(reguistro y cuando ) */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portafolios');
    }
};
