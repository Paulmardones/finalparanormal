<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoriaFamosa>
 */
class HistoriaFamosaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [
        'titulo' => $this->faker->sentence,
        'contenido' => $this->faker->paragraph,
        'imagen' => 'imagen_de_prueba.jpg',
    ];
}

}
