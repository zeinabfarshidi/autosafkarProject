<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Ad::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 10; $i++){
            Ad::create([
                'user_id'=>$i,
                'category_id'=>$i,
                'title'=>$faker->title,
                'content'=>$faker->text,
                'phone'=>'0912345678' . $i,
                'address'=>$faker->text,
                'geo_id'=>$i,
                'lat'=>$i,
                'logn'=>$i,
                'fixed_phone'=>'02112345' . $i,
                'ad_type'=>$faker->name,
                'price'=>235000,
                'max_price'=>335000,
            ]);
        }
    }
}
