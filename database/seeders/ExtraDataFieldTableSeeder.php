<?php

namespace Database\Seeders;

use App\Models\ExtraDataField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraDataFieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!ExtraDataField::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++){
            ExtraDataField::create([
                'name'=>$faker->name,
                'type'=>$faker->name,
                'settings'=>$faker->name,
                'show_categories_id'=>$i,
            ]);
        }
    }
}
