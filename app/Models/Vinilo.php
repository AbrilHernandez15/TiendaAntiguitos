<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinilo extends Model{

    protected $table = 'vinilo';

    use HasFactory;

    protected $fillable = [
        'interprete',
        'album',
        'disquera',
        'lanzamiento',
        'numero_canciones',
        'cantidad',
        'precio_compra',
        'precio_venta'
    ];
}
