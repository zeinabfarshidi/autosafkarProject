<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Banner;
use App\Models\Permission;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('banner', 'بنرهای تبلیغاتی');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            Banner::create([
                'user_id' => $user->id,
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'link' => $faker->url,
            ]);
        }
    }
}
