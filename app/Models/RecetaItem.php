<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecetaItem extends Model { use HasFactory;

  protected $table = "recetaitems";
    
    static $rules = [
    'id' => 'requred',
		'idIntegral' => 'requred',
		'orden' => 'requred',
		'detalle' => 'requred',
    'updated_at' => 'requred',
    'created_at' => 'requred',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'idIntegral',
      'orden',
      'detalle',
      'updated_at',
      'created_at',
    ];
  }
