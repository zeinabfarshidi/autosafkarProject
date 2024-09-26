<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Permission;
use App\Models\TechnicalDegree;
use App\Models\Tender;
use App\Models\TenderPrice;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('tender', 'مناقصه');
    }

    private function data()
    {
        $faker = Factory::create();
        $orders = Order::all()->random(5);
        foreach ($orders as $order) {
            Tender::create([
                'user_id' => $order->user->id,
                'order_id' => $order->id,
                'tender_price_id'=>TenderPrice::first()->id,
                'expired_at'=>Carbon::now()->addDays(2)
            ]);
        }
    }
}
