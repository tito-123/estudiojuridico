<?php

namespace Database\Factories;

use App\Models\Doctramiteadmi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctramiteadmiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctramiteadmi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'tipo' => $this->faker->word,
        'clase' => $this->faker->word,
        'documento' => $this->faker->word,
        'idtramiteadmi' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
