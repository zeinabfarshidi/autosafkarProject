<?php

namespace Database\Seeders;

use App\Models\AdCategory;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AdCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!AdCategory::count())
            $this->data();
        Permission::store('adCategory', 'دسته بندی آگهی ها');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            AdCategory::create([
                'user_id' => $user->id,
                'name' => $faker->name,
                'latinName' => $faker->name,
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'description' => $faker->text($maxNbChars = 200),
            ]);
        }
    }
}
