<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeZonaClienteNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->string('zona_cliente')->nullable()->change(); // Cambia a nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->string('zona_cliente')->nullable(false)->change(); // Vuelve a no nullable en caso de revertir
        });
    }
}
