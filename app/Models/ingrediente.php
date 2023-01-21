<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedidoitem extends Model { use HasFactory;

  protected $table = "pedidositem";
    
    static $rules = [
    'id' => 'requred',
		'idPedido' => 'requred',
		'idCliente' => 'requred',
		'idArticulo' => 'requred',
    'idProducto' => 'requred',
    'aplicacion' => 'requred',
    'descripcionCorta' => 'requred',
		'cantidad' => 'requred',
    'preciolista' => 'requred',
    'precioneto' => 'requred',
    'preciocategorizado' => 'requred'
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'idPedido',
      'idCliente',
      'idArticulo',
      'idProducto',
      'aplicacion',
      'descripcionCorta',
      'cantidad',
      'preciolista',
      'precioneto',
      'preciocategorizado'
    ];
  }
