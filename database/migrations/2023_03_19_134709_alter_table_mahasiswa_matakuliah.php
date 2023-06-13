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
        Schema::table('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('matakuliah_id');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->restrictOnDelete();
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->dropForeign(['mahasiswa_id']);
            $table->dropForeign(['matakuliah_id']);
        });
    }
};
