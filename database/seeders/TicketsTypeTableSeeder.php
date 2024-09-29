<?php

namespace Database\Seeders;

use App\Models\TicketsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!TicketsType::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 10; $i++){
            TicketsType::create([
                'name'=>$faker->name,
                'content'=>$faker->text,
            ]);
        }
    }
}
