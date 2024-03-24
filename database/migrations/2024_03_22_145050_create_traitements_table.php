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
        Schema::create('traitements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rendez_vous_id');
            $table->foreign('rendez_vous_id')->references('id')->on('rendez_vouses');
            $table->date('date');
            $table->unsignedBigInteger('type_traitement_id');
            $table->foreign('type_traitement_id')->references('id')->on('type_traitements');
            $table->string('statut_paiement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traitements');
    }
};
