<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Like::count())
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
        for ($i = 1; $i < 10; $i++){
            Like::create([
                'likeable_type'=>collect($types)->random(),
                'likeable_id'=>$i,
                'user_id'=>$i,
                'like_type'=>$faker->title,
            ]);
        }
    }
}
