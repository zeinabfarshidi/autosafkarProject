<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Option::count())
            $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            Option::create([
                'option_key' => $i,
                'option_value' => $faker->name,
            ]);
        }
    }
}
