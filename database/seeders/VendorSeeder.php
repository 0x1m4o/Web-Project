<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::insert([
            'name'=>'Ahmad Muhajir',
            'business_name'=>'Muhajir Store',
            'phone'=>'08123456789',
            'business_phone'=>'093498194',
            'email'=>Str::random(10) . '@gmail.com',
            'password'=>bcrypt('password'),
            'category'=>'',
            'address'=>fake()->randomElement(['Jakarta', 'Bogor', 'Bekasi']),
            'avatar'=>'/img/default-avatar.png',
        ]);
        Vendor::factory(20)->create();
    }
}