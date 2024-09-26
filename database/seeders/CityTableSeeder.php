<?php

namespace Database\Seeders;

use App\Models\AdCategory;
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
        if (!City::count())
            $this->data();;
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (State::all() as $state) {
            City::create([
                'user_id' => User::first()->id,
                'state_id' => $state->id,
                'name' => $faker->name,
            ]);
        }
    }
}
