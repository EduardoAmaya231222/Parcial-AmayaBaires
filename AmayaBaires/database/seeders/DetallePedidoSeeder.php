<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetallePedido;
use Database\Factories\DetallePedidoFactory;

class DetallePedidoSeeder extends Seeder
{
    public function run()
    {
        DetallePedido::factory()->count(12)->create();
    }
}
