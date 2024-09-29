<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Category::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++){
            Category::create([
                'name'=>$faker->name,
                'desc'=>$faker->name,
                'thumbnail_id'=>$i,
                'parent_id'=>$i,
            ]);
        }
    }
}
