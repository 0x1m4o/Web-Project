<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $vendorsIDs = DB::table('vendors')->pluck('id');
        $categoriesNames = DB::table('categories')->pluck('name');

        return [
            'vendor_id'=>fake()->randomElement($vendorsIDs),
            'image'=>fake()->randomElement(['/img/The-Aesthetic.png', '/img/Resonances.png', '/img/The-Right-Two.png', '/img/Tropical.png', '/img/Nomade.png']),
            'name'=>fake()->sentence(3),
            'description'=>fake()->sentence(10),
            'category'=>fake()->randomElement($categoriesNames),
            'price'=>rand(200000, 1000000),
            'theme'=>fake()->randomElement(['Indoor', 'Outdoor']),
            'rating'=>rand(0, 5),
            'review'=>rand(0, 100),
        ];
    }
}