<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->sentence(2),
            'business_name'=>fake()->sentence(2),
            'phone'=>rand(81111111111, 89999999999),
            'business_phone'=>rand(81111111111, 89999999999),
            'email'=>Str::random(10) . '@gmail.com',
            'password'=>bcrypt('password'),
            'category'=>'',
            'address'=>fake()->randomElement(['Jakarta', 'Bogor', 'Bekasi']),
            'avatar'=>'/img/default-avatar.png',
        ];
    }
}