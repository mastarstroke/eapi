<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'products_id' => function(){
                return Products::all()->pluck('id')->random();
            },
            'user_id' => $this->faker->randomDigit(),
            'product' => $this->faker->word(),
            'price' => $this->faker->randomDigit(),
        ];
    }
}