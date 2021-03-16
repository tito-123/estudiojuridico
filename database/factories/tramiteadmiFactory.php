<?php

namespace Database\Factories;

use App\Models\tramiteadmi;
use Illuminate\Database\Eloquent\Factories\Factory;

class tramiteadmiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tramiteadmi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'descripcion' => $this->faker->text,
        'tipotramite' => $this->faker->word,
        'estado' => $this->faker->word,
        'personas' => $this->faker->word,
        'cita' => $this->faker->word,
        'idcliente' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
