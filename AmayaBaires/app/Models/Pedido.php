<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $primaryKey = 'id_Pedido';
    public $timestamps = false;

    protected $fillable = [
        'fechaPedido',
        'fechaEntrega',
        'observaciones',
        'id_Cliente',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_Cliente', 'id_Cliente');
    }
}
