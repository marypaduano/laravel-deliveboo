<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Order;
use Faker\Generator as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $restaurant_id = Restaurant::all()->pluck('id')->all();
        $products = ['pizza', 'pasta', 'pesce', 'carne', 'hamburger', 'panino', 'sushi'];

        foreach ($products as $product) {
            $new_product = new Product();
            $new_product->name = $product;
            $new_product->ingredient = $faker->sentence(10);
            $new_product->price = $faker->randomFloat(2, 5, 20);
            $new_product->thumb = $faker->imageUrl(640, 480, 'food', true);
            $new_product->visible = true;
            $new_product->restaurant_id = $faker->randomElement($restaurant_id);
            $new_product->save();
        }
    }
}
