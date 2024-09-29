<?php

namespace Database\Seeders;

use App\Models\GeoLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeoLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!GeoLocation::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++){
            GeoLocation::create([
                'name'=>$faker->name,
                'lat'=>$faker->latitude,
                'long'=>$faker->longitude,
                'parent_id'=>$i,
                'level_name'=>$faker->name,
            ]);
        }
    }
}
