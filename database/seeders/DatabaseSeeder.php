<?php

namespace Database\Seeders;

use App\Models\PaymentGateway;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(UserTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(UploadTableSeeder::class);
        $this->call(MetadataTableSeeder::class);
        $this->call(RelationshipTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(GeoLocationTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ExtraDataFieldTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(UpgradePackageTableSeeder::class);
        $this->call(PaymentGatewayTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(AdTableSeeder::class);
        $this->call(ExtraDataTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(RequestTableSeeder::class);
        $this->call(TicketsTypeTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(LikeTableSeeder::class);
        $this->call(SeoBaseTableSeeder::class);



//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
