<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     /**   contactos
*id – int – primary key
*codigoEntrada – varchar – primary key
*nombre – varchar
*apellido – varchar
*telefono – varchar

      */

    public function up(): void
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id('id');
            $table->string('codigoEntrada');
            $table->string('nommbre');
            $table->string('apellido');
            $table->string('telefono');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
