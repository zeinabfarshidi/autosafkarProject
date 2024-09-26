<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\ExampleWork;
use App\Models\Order;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Order::count())
            $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        $ads = Ad::all();
        foreach ($ads as $ad) {
            Order::create([
                'user_id' => User::where('id', '!=', $ad->user_id)->first()->id,
                'ad_id' => $ad->id,
                'problem' => $faker->title,
                'description' => $faker->text,
                'img' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
