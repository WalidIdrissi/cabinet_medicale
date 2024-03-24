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
        Schema::create('detail_analyses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('analyse_id');
            $table->foreign('analyse_id')->references('id')->on('analyses');
            $table->unsignedBigInteger('type_analyse_id');
            $table->foreign('type_analyse_id')->references('id')->on('type_analyses');
            $table->string('valeur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_analyses');
    }
};
