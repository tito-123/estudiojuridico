<?php

namespace Database\Factories;

use App\Models\$CLIENTE;
use Illuminate\Database\Eloquent\Factories\Factory;

class $CLIENTEFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = $CLIENTE::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'apellido' => $this->faker->word,
        'ci' => $this->faker->randomDigitNotNull,
        'domicilio' => $this->faker->word,
        'telefono' => $this->faker->word,
        'direccion' => $this->faker->word,
        'userid' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
