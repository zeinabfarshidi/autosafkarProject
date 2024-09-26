<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Permission;
use App\Models\Post;
use App\Models\SubActivity;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SubActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!SubActivity::count())
            $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            SubActivity::create([
                'user_id' => $user->id,
                'title' => $faker->title,
            ]);

        }
    }
}
