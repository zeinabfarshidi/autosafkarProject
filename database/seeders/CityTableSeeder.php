<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();;
    }

    private function data()
    {
        $faker = Factory::create();
        $ids = User::all()->pluck('id')->toArray();
        $stateIds = State::all()->pluck('id')->toArray();
        foreach ($ids as $id) {
            City::create([
                'user_id' => $id,
                'state_id' => array_rand($stateIds),
                'name' => $faker->name,
            ]);
        }
    }
}
