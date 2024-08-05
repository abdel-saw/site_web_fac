<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fsts_chiffres', function (Blueprint $table) {
            $table->id();
            $table->string('annee_universitaire');
            $table->integer('nombre_etudiants');
            $table->integer('nombre_enseignants');
            $table->integer('nombre_departements');
            $table->integer('nombre_laureats');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fsts_chiffres');
    }
};
