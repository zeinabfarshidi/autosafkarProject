<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Payment::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        $types = [
            'Ad',
            'Category',
            'Comment',
            'ExtraData',
            'ExtraDataField',
            'GeoLocation',
            'Metadata',
            'Option',
            'Package',
            'Payment',
            'PaymentGateway',
            'Permission',
            'Relationship',
            'Request',
            'Role',
            'SeoBase',
            'Ticket',
            'TicketsType',
            'UpgradePackage',
            'Upload',
            'User',
        ];
        for ($i = 1; $i <= 10; $i++){
            Payment::create([
                'payment_gateway_id'=>$i,
                'price'=>$i,
                'payementable_id'=>$i,
                'payementable_type'=>'App\\Models\\' . collect($types)->random(),
                'payment_type'=>$faker->name,
                'payment_note'=>$faker->name,
                'payment_status'=>$faker->name,
                'discount_type'=>$faker->name,
                'discount_name'=>$faker->name,
                'discount_price'=>235000,
            ]);
        }
    }
}
