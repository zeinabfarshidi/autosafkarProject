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
        if (!Area::count())
            $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (City::all() as $city) {
            Area::create([
                'user_id' => User::first()->id,
                'city_id' => $city->id,
                'name' => $faker->name,
            ]);
        }
    }
}
