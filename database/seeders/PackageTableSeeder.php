<?php

namespace Database\Seeders;

use App\Models\ExtraDataField;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Package::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++){
            Package::create([
                'name'=>$faker->name,
                'content'=>$faker->text,
                'thumbnail_id'=>$i,
                'price'=>235000,
                'active_days'=>$i,
                'perquisites'=>$i,
                'picutre_count'=>$i,
            ]);
        }
    }
}
