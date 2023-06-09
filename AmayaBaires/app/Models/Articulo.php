<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulo';

    public $timestamps = false;

    protected $primaryKey = 'id_Articulo';

    protected $fillable = [
        'nombre',
        'descripcion',
        'cantInventario',
        'precio',
    ];
}

