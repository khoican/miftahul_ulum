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
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('kategorisId')->index();
            $table->string('title');
            $table->string('logo');
            $table->string('pengurus');
            $table->string('photo');
            $table->longText('body');
            $table->string('file');
            $table->timestamps();

            $table->foreign('kategorisId')->references('id')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikans');
    }
};
