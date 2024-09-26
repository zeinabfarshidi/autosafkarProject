<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Permission;
use App\Models\Tender;
use App\Models\TenderPrice;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TenderPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('tender_prices', 'قیمت گذاری مناقصه');
    }

    private function data()
    {
        $faker = Factory::create();
        TenderPrice::create([
            'user_id'=>User::first()->id,
            'price'=>'10000',
        ]);
    }
}
