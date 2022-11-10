<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CdCasete extends Model{

    protected $table = 'cdcasete';

    use HasFactory;

    protected $fillable = [
        'interprete',
        'descripcion',
        'numero_canciones',
        'cantidad',
        'precio_compra',
        'precio_venta',
        'fecha_ingreso'
    ];
}
