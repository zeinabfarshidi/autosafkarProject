<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\AdImage;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AdImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!AdImage::count())
            $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (Ad::all() as $ad) {
            AdImage::create([
                'user_id' => $ad->user->id,
                'ad_id' => $ad->id,
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'originalPhoto' => true,
            ]);
        }
    }
}
