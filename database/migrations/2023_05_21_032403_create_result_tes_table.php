<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('result_tes', function (Blueprint $table) {
            $table->string("google_id")->primary();
            $table->string("value_introvert");
            $table->string("value_extrovert");
            $table->string("personality");
            $table->date("date");
            $table->date("date_expired");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_tes');
    }
};