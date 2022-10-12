<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actividades;

class Publicador extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'nombre',
    'fecha_de_bautismo',
    'fecha_nacimiento',
    'otras_ovejas',
    'anciano',
    'siervo_ministerial',
    'precursor',
  ];

  protected $casts = [
    'otras_ovejas' => 'boolean',
    'anciano' => 'boolean',
    'siervo_ministerial' => 'boolean',
    'precursor' => 'boolean',

  ];

  public function actividad()
  {
    return $this->hasMany('App\Actividades');
  }
}
