<?php

namespace Database\Seeders;

use App\Models\AdCategory;
use App\Models\Permission;
use App\Models\State;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('state', 'شهر و منطقه');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            State::create([
                'user_id' => $user->id,
                'name' => $faker->name,
            ]);
        }
    }
}
