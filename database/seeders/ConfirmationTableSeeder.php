<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Confirmation;
use App\Models\Permission;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ConfirmationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Confirmation::count())
            $this->data();
        Permission::store('confirmation', 'تاییدیه ها');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            Confirmation::create([
                'user_id' => $user->id,
                'img' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
