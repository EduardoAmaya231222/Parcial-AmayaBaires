<?php

namespace Database\Factories;

use App\Models\DetallePedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetallePedidoFactory extends Factory
{
    protected $model = DetallePedido::class;

    public function definition()
    {
        return [
            'id_Articulo' => $this->faker->numberBetween(1, 12),
            'id_Pedido' => $this->faker->numberBetween(1, 10),
            'cantidad' => $this->faker->numberBetween(1, 5),
            'descuento' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
