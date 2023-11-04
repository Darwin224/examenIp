<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


     /**
      * 
        *directorio
*codigoEntrada – varchar – primary key
*nombre – varchar
*apellido – varchar
*correo – varchar – unique
*telefono – varchar 


*/
    public function up(): void
    {
        Schema::create('directorios', function (Blueprint $table) {
            $table->string('codigoEntrada',25)->primarykey();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('correo',50);
            $table->string('telefono',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directorios');
    }
};
