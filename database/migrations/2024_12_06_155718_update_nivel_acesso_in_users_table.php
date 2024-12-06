<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('nivel_acesso', ['estagiario', 'tecnico', 'supervisor', 'admin'])->change();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('nivel_acesso', ['tecnico', 'supervisor', 'admin'])->change();
        });
    }
};
