<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IntegralDetalle extends Model { use HasFactory;

  protected $table = "integraldetalles";
    
    static $rules = [
      'id' => 'requred',
      'nombre' => 'requred',
      'descripcion' => 'requred',
      'imagenBolsa' => 'requred',
      'updated_at' => 'requred',
      'created_at' => 'requred',
      ];
  

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'nombre',
      'descripcion',
      'imagenBolsa',
      'updated_at',
      'created_at'
    ];
  }