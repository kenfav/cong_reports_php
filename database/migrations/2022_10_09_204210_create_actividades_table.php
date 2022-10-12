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
      $table->integer('mes')->unsigned();
      $table->integer('ano')->unsigned();
      $table->integer('publicaciones')->unsigned()->nullable();
      $table->integer('videos')->unsigned()->nullable();
      $table->integer('horas')->unsigned();
      $table->integer('revisitas')->unsigned()->nullable();
      $table->integer('estudios')->unsigned()->nullable();
      $table->string('notas')->nullable();
      $table->timestamps();
      $table->foreignId('publicador_id')->references('id')->on('publicadors')->onDelete('cascade');
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
