<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\AdCategory;
use App\Models\Area;
use App\Models\City;
use App\Models\Permission;
use App\Models\State;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
        Permission::store('ad', 'آگهی ها');
    }

    private function data()
    {
        $faker = Factory::create();
        $adCategoryIds = AdCategory::all()->pluck('id')->toArray();
        $stateIds = State::all()->pluck('id')->toArray();
        $cityIds = City::all()->pluck('id')->toArray();
        $areaIds = Area::all()->pluck('id')->toArray();
        foreach (User::all() as $user) {
            Ad::create([
                'user_id' => $user->id,
                'ad_category_id' => array_rand($adCategoryIds),
                'state_id' => array_rand($stateIds),
                'city_id' => array_rand($cityIds),
                'area_id' => array_rand($areaIds),
                'title' => $faker->title,
                'mobile' => '0910200122' . $user->id,
                'minPrice'=>$faker->randomFloat(2,0,1000),
                'maxPrice'=>$faker->randomFloat(2,0,1000),
                'description' => $faker->text,
                'views'=>$faker->randomFloat(2,0,1000),
                'status'=>'تایید شده'
            ]);
        }
    }
}
