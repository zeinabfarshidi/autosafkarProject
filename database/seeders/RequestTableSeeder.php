<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Request::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 10; $i++){
            Request::create([
                'user_id'=>$i,
                'ad_id'=>$i,
                'request_type'=>$faker->title,
                'price'=>123000,
                'max_price'=>234000,
                'title'=>$faker->title,
                'content'=>$faker->text,
                'status'=>$faker->title,
            ]);
        }
    }
}
