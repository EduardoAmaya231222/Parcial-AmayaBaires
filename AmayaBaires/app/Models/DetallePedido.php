<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;

    protected $table = 'detalle_pedido';

    public $timestamps = false;

    protected $fillable = [
        'id_Articulo',
        'id_Pedido',
        'cantidad',
        'descuento',
    ];

    public function articulo()
    {
        return $this->belongsTo(Articulo::class, 'id_Articulo');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_Pedido');
    }
}
