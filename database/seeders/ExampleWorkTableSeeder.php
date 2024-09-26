<?php

namespace Database\Seeders;

use App\Models\Confirmation;
use App\Models\ExampleWork;
use App\Models\Permission;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ExampleWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('exampleWork', 'نمونه کارها');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            ExampleWork::create([
                'user_id' => $user->id,
                'title' => $faker->title,
                'img' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
