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
    Schema::create('actividades', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignId('nombre')->constrained('publicadors');
      $table->integer('mes');
      $table->integer('ano');
      $table->integer('publicaciones');
      $table->integer('videos');
      $table->integer('horas');
      $table->integer('revisitas');
      $table->integer('estudios');
      $table->string('notas');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('actividades');
  }
};
