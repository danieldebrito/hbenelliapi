<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingrediente extends Model { use HasFactory;

  protected $table = "ingredientes";
    
    static $rules = [
    'id' => 'requred',
		'idIntegral' => 'requred',
		'detalle' => 'requred',
		'cantidad' => 'requred',
    'unidad' => 'requred',
    'updated_at' => 'requred',
    'created_at' => 'requred',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'idIntegral',
      'detalle',
      'cantidad',
      'unidad',
      'updated_at',
      'created_at',
    ];
  }
