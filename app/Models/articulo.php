<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedidoitem extends Model { use HasFactory;

  protected $table = "articulos";
    
    static $rules = [
    'id' => 'requred',
		'idCategoria' => 'requred',
		'codigo' => 'requred',
		'nombre' => 'requred',
    'peso' => 'requred',
    'unidad' => 'requred',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'idCategoria',
      'codigo',
      'nombre',
      'peso',
      'unidad',
    ];
  }
