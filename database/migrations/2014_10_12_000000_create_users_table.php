<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('username', 30);
            $table->text('password');
            $table->unsignedBigInteger('id_outlet');
            $table->enum('role', ['admin', 'kasir', 'owner']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('kasir'); // Default role bisa disesuaikan
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
