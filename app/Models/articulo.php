<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articulo extends Model { use HasFactory;

  protected $table = "articulos";
    
    static $rules = [
    'id' => 'requred',
		'idCategoria' => 'requred',
    'idDetalle' => 'requred',
		'codigo' => 'requred',
		'nombre' => 'requred',
    'peso' => 'requred',
    'unidad' => 'requred',
    'urlPhoto' => 'requred',
    'updated_at' => 'requred',
    'created_at' => 'requred',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'idCategoria',
      'idDetalle',
      'codigo',
      'nombre',
      'peso',
      'unidad',
      'urlPhoto',
      'updated_at',
      'created_at',
    ];
  }
