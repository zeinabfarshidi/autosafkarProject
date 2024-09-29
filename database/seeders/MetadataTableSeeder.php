<?php

namespace Database\Seeders;

use App\Models\Metadata;
use App\Models\Upload;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetadataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Metadata::count())
            $this->data();
    }

    private function data()
    {
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
        for ($i = 1; $i <= 10; $i++) {
            Metadata::create([
                'metaable_id' => $i,
                'metaable_type' => 'App\\Models\\' . collect($types)->random(),
                'meta_key' => $i,
                'meta_value' => $i,
                'parent_id'=> $i
            ]);
        }
    }
}
