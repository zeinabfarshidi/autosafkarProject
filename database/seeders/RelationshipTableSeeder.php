<?php

namespace Database\Seeders;

use App\Models\Metadata;
use App\Models\Relationship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Relationship::count())
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
            Relationship::create([
                'object_type' => 'App\\Models\\' . collect($types)->random(),
                'object_id' => $i,
                'target_id' => $i,
            ]);
        }
    }
}
