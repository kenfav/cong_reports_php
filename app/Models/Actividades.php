<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publicador;

class Actividades extends Model
{
  use HasFactory;

  protected $fillable = [
    'mes',
    'ano',
    'publicaciones',
    'videos',
    'horas',
    'revisitas',
    'estudios',
    'notas',
    'publicador_id'
  ];

  public function publicador()
  {
    return $this->belongsTo('App\Publicador');
  }
}
