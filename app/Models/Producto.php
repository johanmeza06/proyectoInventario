<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;


    protected $fillable = [
        'codigo',
        'nombre_producto',
        'cantidad',
        'fecha_vencimiento',
        'precio_venta',
        'precio_compra'



    ];
}
