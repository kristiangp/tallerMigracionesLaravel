<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');  
            $table->integer('edad');   
            $table->boolean('activo'); 
            $table->decimal('saldo', 8, 2); 
            $table->date('fecha_registro'); 

            
            $table->string('email')->unique(); 
            $table->string('telefono')->nullable(); 
            $table->timestamps(); 
            $table->softDeletes(); 
            $table->bigInteger('referencia_id')->unsigned(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
