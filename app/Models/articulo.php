<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articulo extends Model { use HasFactory;

  protected $table = "articulos";
    
    static $rules = [
    'id' => 'requred',
		'rubro' => 'requred',
    'subRubro' => 'requred',
    'idDetalle' => 'requred',
		'codigo' => 'requred',
		'nombre' => 'requred',
    'observaciones' => 'requred',
    'peso' => 'requred',
    'unidad' => 'requred',
    'precioLista' => 'requred',
    'precioNeto' => 'requred',
    'urlPhoto' => 'requred',
    'updated_at' => 'requred',
    'created_at' => 'requred',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'rubro',
      'subRubro',
      'idDetalle',
      'codigo',
      'nombre',
      'observaciones',
      'peso',
      'unidad',
      'precioLista',
      'precioNeto',
      'urlPhoto',
      'updated_at',
      'created_at',
    ];
  }
