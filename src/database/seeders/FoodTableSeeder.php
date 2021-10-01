<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'name' => 'Telur',
            'price' => '1000',
            'stock' => 5,
            'jenis' => 'makanan',
            'image' => 'image/canteen/food/JRKqSYzEmqZ4ux3uyyTqC6yViw5rYLe6m18T1O4k.png',
            'canteen_id' => 2,
        ]);
        Food::create([
            'name' => 'Burger',
            'price' => '1500',
            'stock' => 8,
            'jenis' => 'makanan',
            'image' => 'image/canteen/food/mFxXAU4stL5UXAyWuHXMaqPTL6fC8HIlHXYxFXKP.png',
            'canteen_id' => 2,
        ]);
        Food::create([
            'name' => 'Bakso',
            'price' => '5000',
            'stock' => 10,
            'jenis' => 'makanan',
            'image' => 'image/canteen/food/6piAQXOeF72QSO5AYh37oIE07jUx0G5HN6z6cHhV.png',
            'canteen_id' => 1,
        ]);
        Food::create([
            'name' => 'es',
            'price' => '3000',
            'stock' => 8,
            'jenis' => 'makanan',
            'image' => 'image/canteen/food/Rx1mVqU59zfWKZ6DiBcC14PCTwxFOexR9ziEo6Yj.png',
            'canteen_id' => 1,
        ]);
    }
}
