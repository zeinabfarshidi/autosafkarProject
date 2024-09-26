<?php

namespace Database\Seeders;

use App\Models\Subscribe;
use App\Models\TechnicalDegree;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TechnicalDegreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            TechnicalDegree::create([
                'user_id' => $user->id,
                'img' => $faker->imageUrl,
                'status'=>'تایید شده'
            ]);
        }
    }
}
