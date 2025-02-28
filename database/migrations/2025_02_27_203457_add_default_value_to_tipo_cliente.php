<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValueToTipoCliente extends Migration
{
    public function up()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->string('tipo_cliente')->default('Tipo no especificado')->change(); // Agrega un valor predeterminado
        });
    }

    public function down()
    {
        Schema::table('socios', function (Blueprint $table) {
            $table->string('tipo_cliente')->nullable(false)->change(); // Revierte el cambio si se desea
        });
    }
}
