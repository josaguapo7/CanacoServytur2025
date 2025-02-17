<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('zona_cliente');
            $table->string('tipo_cliente');
            $table->string('nombre');
            $table->string('rfc');
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('codigo_qr')->unique()->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socios');
    }
};
