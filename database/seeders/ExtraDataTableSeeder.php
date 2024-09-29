<?php

namespace Database\Seeders;

use App\Models\ExtraData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!ExtraData::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 10; $i++){
            ExtraData::create([
                'extra_dataable_id'=>$i,
                'extra_dataable_type'=>$faker->title,
                'extra_data_field_id'=>$i,
                'content'=>$faker->text,
            ]);
        }
    }
}
