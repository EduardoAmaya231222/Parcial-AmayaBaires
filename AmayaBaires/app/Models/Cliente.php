<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'fechaNac'];

    // Propiedades adicionales

    protected $primaryKey = 'id_Cliente';

    protected $table = 'cliente';

    public $timestamps = false;

    // Relaciones con otros modelos

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_Cliente');
    }

    // Métodos adicionales

    public function nombreCompleto()
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}
