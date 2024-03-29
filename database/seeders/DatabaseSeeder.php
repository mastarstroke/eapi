<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(5)->create();
        \App\Models\Products::factory(10)->create();
        \App\Models\Review::factory(300)->create();
        \App\Models\Cart::factory(10)->create();
    }
}