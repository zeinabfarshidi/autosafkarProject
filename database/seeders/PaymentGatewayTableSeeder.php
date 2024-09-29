<?php

namespace Database\Seeders;

use App\Models\PaymentGateway;
use App\Models\UpgradePackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentGatewayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!PaymentGateway::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++){
            PaymentGateway::create([
                'name'=>$faker->name,
                'thumbnail_id'=>$i,
                'desc'=>$faker->text,
                'settings'=>$faker->name,
            ]);
        }
    }
}
