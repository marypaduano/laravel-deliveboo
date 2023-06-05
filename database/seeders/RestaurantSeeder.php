<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\User;
use App\Models\Restaurant;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $type_ids = Type::all()->pluck('id')->all();
        $restaurants = ['Mc Donald', 'Fenice Azzurra', 'Sushi World'];
        $user_ids = User::all()->pluck('id')->all();
 
        foreach ($restaurants as $restaurant) {
            $new_restaurant = new Restaurant();
            $new_restaurant->restaurant_name = $restaurant;
            $new_restaurant->address = $faker->streetAddress();
            $new_restaurant->vat = $faker->numberBetween(10000000000, 99999999999);
            $new_restaurant->user_id = $faker->randomElement($user_ids);
            $new_restaurant->restaurant_image = $faker->imageUrl(640, 480, 'food');
            $new_restaurant->save();

            $new_restaurant->types()->attach($faker->randomElements($type_ids, rand(0, 3)));
        }
    }
}
