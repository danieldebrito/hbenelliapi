<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model { use HasFactory;

  protected $table = "categorias";
    
    static $rules = [
    'id' => 'requred',
		'nombre' => 'requred',
    'updated_at' => 'requred',
    'created_at' => 'requred',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'nombre',
      'updated_at',
      'created_at',
    ];
  }
