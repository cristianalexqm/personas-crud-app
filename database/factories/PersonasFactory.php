<?php

namespace Database\Factories;
use App\Models\personas;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personas>
 */
class PersonasFactory extends Factory
{
    protected $model = personas::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'edad' => $this->faker->numberBetween(18, 65),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}