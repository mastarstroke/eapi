<?php

namespace Database\Factories;

// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => function(){
                return Products::all()->pluck('id')->random();
            },
            'customer' => $this->faker->name(),
            'review' => $this->faker->paragraph(),
            'star' => $this->faker->numberBetween(0,5),
        ];
    }


    
}