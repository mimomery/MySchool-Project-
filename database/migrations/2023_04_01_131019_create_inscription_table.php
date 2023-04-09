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
        Schema::create('inscription', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level');
            $table->string('nomeleve');
            $table->string('prenomeleve');
            $table->string('sexe');
            $table->string('etablisement');
            $table->date('date');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tele');
            $table->string('adresse');
            $table->string('profession');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
