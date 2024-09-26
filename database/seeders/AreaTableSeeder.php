<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\City;
use App\Models\State;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        $ids = User::all()->pluck('id')->toArray();
        $cityIds = City::all()->pluck('id')->toArray();
        foreach ($ids as $id) {
            Area::create([
                'user_id' => $id,
                'city_id' => array_rand($cityIds),
                'name' => $faker->name,
            ]);
        }
    }
}
