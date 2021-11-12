<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'apellido_paterno'=>$this->faker->sentence(),
            'apellido_materno'=>$this->faker->name(),
            'nombre'=>$this->faker->sentence(),
            'fecha_de_nacimiento'=>$this->faker->date(),
            'sexo'=>$this->faker->sentence('f','m')
        ];
    }
}
