<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departamentos =['Infomática', "Comercio", "Imagen"];
        return [
            "nombre" => fake()->name(),
            "apellidos" => fake()->lastName(),
            "email" => fake()->safeEmail,
            "departamento" => fake()->randomElement($departamentos),

        ];
    }
}