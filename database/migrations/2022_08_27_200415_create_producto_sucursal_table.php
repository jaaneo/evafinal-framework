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
        Schema::create('producto_sucursal', function (Blueprint $table) {
            $table->foreignId('producto_id')->constrained();
			$table->foreignId('sucursal_id')->constrained('sucursales');
            $table->integer('cantidad');
            $table->primary(['producto_id','sucursal_id']); // la llave primaria es la combinación de estas dos columnas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_sucursal');
    }
};
