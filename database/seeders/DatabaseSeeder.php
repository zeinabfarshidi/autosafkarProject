<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        $this->call(RoleTableSeeder::class);
//        $this->call(UserTableSeeder::class);
//        $this->call(ProfileTableSeeder::class);
//        $this->call(AdCategoryTableSeeder::class);
//        $this->call(StateTableSeeder::class);
//        $this->call(CityTableSeeder::class);
//        $this->call(AreaTableSeeder::class);
//        $this->call(AdTableSeeder::class);
//        $this->call(AdImageTableSeeder::class);
//        $this->call(BannerTableSeeder::class);
//        $this->call(CategoryTableSeeder::class);
//        $this->call(ConfirmationTableSeeder::class);
//        $this->call(ExampleWorkTableSeeder::class);
//        $this->call(OrderTableSeeder::class);
//        $this->call(PostTableSeeder::class);
//        $this->call(SocialMediaTableSeeder::class);
//        $this->call(SubActivityTableSeeder::class);
//        $this->call(SubscribeTableSeeder::class);
//        $this->call(TechnicalDegreeTableSeeder::class);
        $this->call(TenderPriceTableSeeder::class);
        $this->call(TenderTableSeeder::class);
    }
}
