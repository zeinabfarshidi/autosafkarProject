<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Permission;
use App\Models\Tender;
use App\Models\TenderPrice;
use App\Models\Upgrade;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UpgradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Upgrade::count()){
            foreach ($this->data() as $upgrade) {
                Upgrade::create([
                    'user_id' => User::first()->id,
                    'title' => $upgrade['title'],
                    'price'=>$upgrade['price'],
                    'showNumber'=>$upgrade['showNumber']
                ]);
            }
        }

        Permission::store('upgrade', 'ارتقا آگهی');
    }

    private function data()
    {
        return [
            ['title'=>'طلایی', 'price'=>'1000000', 'showNumber'=>'1'],
            ['title'=>'نردبان', 'price'=>'800000', 'showNumber'=>'2'],
            ['title'=>'فوری', 'price'=>'550000', 'showNumber'=>'3'],
            ['title'=>'مزایده', 'price'=>'300000', 'showNumber'=>'4'],
        ];
    }
}
