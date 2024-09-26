<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Permission;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('category', 'دسته بندی ها');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            Category::create([
                'user_id' => $user->id,
                'name' => $faker->name,
                'latinName' => $faker->name,
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'text' => $faker->text,
            ]);
        }
    }
}
