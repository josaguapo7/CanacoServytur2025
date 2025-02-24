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
    Schema::create('socios', function (Blueprint $table) {
        $table->id();
        $table->string('clave')->unique();
        $table->string('zona_cliente');
        $table->string('tipo_cliente');
        $table->string('nombre');
        $table->string('rfc')->nullable();
        $table->string('email')->nullable();
        $table->string('estatus');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};
