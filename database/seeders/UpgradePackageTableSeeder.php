<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\UpgradePackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpgradePackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!UpgradePackage::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++){
            UpgradePackage::create([
                'name'=>$faker->name,
                'content'=>$faker->text,
                'interval'=>$i,
                'price'=>235000,
                'thumbnail_id'=>$i,
            ]);
        }
    }
}
