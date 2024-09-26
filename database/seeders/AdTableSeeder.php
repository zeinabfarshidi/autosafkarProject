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
        if (!Ad::count())
            $this->data();
        Permission::store('ad', 'آگهی ها');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            $state = State::all()->random();
            $city = $state->cities->random();
            $area = $city->areas->random();
            Ad::create([
                'user_id' => $user->id,
                'ad_category_id' => AdCategory::all()->random()->id,
                'state_id' => $state->id,
                'city_id' => $city->id,
                'area_id' => $area->id,
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
