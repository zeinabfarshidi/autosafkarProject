<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\SeoBase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoBaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!SeoBase::count())
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
            SeoBase::create([
                'seoable_type'=>collect($types)->random(),
                'seoable_id'=>$i,
                'seo_title'=>$faker->title,
                'seo_description'=>$faker->text,
                'settings'=>$faker->title,
            ]);
        }
    }
}
