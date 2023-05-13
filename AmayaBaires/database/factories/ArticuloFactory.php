<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    protected $model = Articulo::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'cantInventario' => $this->faker->randomNumber(2),
            'precio' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
