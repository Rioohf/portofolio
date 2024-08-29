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
        Schema::create('penghargaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('education_id');
            $table->integer('juara')->length(3);
            $table->string('perlombaan', length: 255);
            $table->integer('tahun_lomba')->length(18);
            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghargaans');
    }
};
