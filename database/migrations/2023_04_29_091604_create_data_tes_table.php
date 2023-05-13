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
        Schema::create('data_tes', function (Blueprint $table) {
            $table->increments('ID_Tes');
            $table->string('judul');
            $table->string('deskripsi');
            $table->integer('Jumlah_Tes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tes');
    }
};
