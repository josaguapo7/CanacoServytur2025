<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('usuario'); // Puede ser 'usuario' o 'admin'
        });

        Schema::table('admins', function (Blueprint $table) {
            $table->string('role')->default('admin');
        });
    }

    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });

        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
