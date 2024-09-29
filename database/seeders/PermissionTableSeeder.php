<?php

namespace Database\Seeders;

use App\Models\Permission;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Permission::count()) {
            $this->data();
        }
    }

    private function data()
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Factory::create();
            Permission::create([
                'name' => $faker->name,
            ]);
        }
    }
}
