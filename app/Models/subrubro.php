<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subrubro extends Model { use HasFactory;

  protected $table = "subrubros";
    
    static $rules = [
    'id' => 'requred',
		'rubro' => 'requred',
    'subrubro' => 'requred',
    'updated_at' => 'requred',
    'created_at' => 'requred',
    ];

    protected $perPage = 20;

    protected $fillable = [
      'id',
      'rubro',
      'subrubro',
      'updated_at',
      'created_at',
    ];
  }
