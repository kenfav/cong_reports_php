<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nombre')->constrained('publicadores');
            $table->integer('mes');
            $table->integer('ano');
            $table->integer('publicaciones');
            $table->integer('videos');
            $table->integer('horas');
            $table->integer('revisitas');
            $table->integer('estudios');
            $table->string('notas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad');
    }
};
