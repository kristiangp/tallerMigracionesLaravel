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
        Schema::table('empleado', function (Blueprint $table) {
            $table->string('direccion')->after('telefono')->nullable(); 
        });
    }

    public function down()
    {
        Schema::table('empleado', function (Blueprint $table) {
            $table->dropColumn('direccion');
        });
    }
};
