<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Venue',
                'slug' => 'venue',
            ],
            [
                'name' => 'Dekorasi',
                'slug' => 'dekorasi',
            ],
            [
                'name' => 'MUA',
                'slug' => 'mua',
            ],
            [
                'name' => 'Catering',
                'slug' => 'catering',
            ],
            [
                'name' => 'Band',
                'slug' => 'band',
            ],
            [
                'name' => 'Fotografi',
                'slug' => 'fotografi',
            ],
            [
                'name' => 'Busana',
                'slug' => 'busana',
            ],
            [
                'name' => 'W.O.',
                'slug' => 'w-o',
            ],
            [
                'name' => 'Souvenir',
                'slug' => 'souvenir',
            ],
            [
                'name' => 'Perhiasan',
                'slug' => 'perhiasan',
            ],
            [
                'name' => 'MC',
                'slug' => 'mc',
            ],
            [
                'name' => 'Undangan',
                'slug' => 'undangan',
            ],
            [
                'name' => 'Wedding Planner',
                'slug' => 'wedding-planner',
            ],
            [
                'name' => 'Honey Moon',
                'slug' => 'honey-moon',
            ],
            [
                'name' => 'Photo Booth',
                'slug' => 'photo-booth',
            ],
            [
                'name' => 'Koreografi',
                'slug' => 'koreografi',
            ],
            [
                'name' => 'Seserahan',
                'slug' => 'seserahan',
            ],
            [
                'name' => 'Lainnya',
                'slug' => 'lainnya',
            ],
        ]);
    }
}