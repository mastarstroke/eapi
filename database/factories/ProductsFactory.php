<?php

namespace Database\Factories;

use App\Models\User;
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
            'name' => $this->faker->word(),
            'details' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(100,1000),
            'stock' => $this->faker->randomDigit(),
            'discount' => $this->faker->numberBetween(2,30),
            'user_id' => function(){
                return User::all()->random();
            },
        ];
    }
}