<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\SubActivity;
use App\Models\Subscribe;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SubscribeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('subscribe', 'اشتراک ها');
    }

    private function data()
    {
        $faker = Factory::create();
        $subscribes = ['طلایی', 'نقره ای'];
        foreach ($subscribes as $item) {
            $subscribe = Subscribe::create([
                'name' => $item,
                'price' => $faker->numberBetween(1000000, 100000000),
            ]);
            $permissions = Permission::all()->random(3);
            foreach ($permissions as $permission) {
                $subscribe->permissions()->attach($permission);
            }
        }
    }
}
