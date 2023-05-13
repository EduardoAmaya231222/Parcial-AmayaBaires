<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition()
    {
        return [
            'fechaPedido' => $this->faker->date(),
            'fechaEntrega' => $this->faker->date(),
            'observaciones' => $this->faker->sentence(5),
            'id_Cliente' => function () {
                return \App\Models\Cliente::factory()->create()->id_Cliente;
            },
        ];
    }
}
