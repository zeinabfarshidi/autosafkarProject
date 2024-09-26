<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Permission;
use App\Models\Post;
use App\Models\SocialMedia;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data();
    }

    private function data()
    {
        $faker = Factory::create();
        $socialMedia = [
            ['name'=>'telegram', 'link'=>$faker->url],
            ['name'=>'whatsApp', 'link'=>$faker->url],
            ['name'=>'instagram', 'link'=>$faker->url],
            ['name'=>'aparat', 'link'=>$faker->url],
            ['name'=>'youTube', 'link'=>$faker->url],
        ];
        foreach (User::all() as $user) {
            foreach ($socialMedia as $item){
                SocialMedia::create([
                    'user_id' => $user->id,
                    'name' => $item['name'],
                    'link' => $item['link'],
                ]);
            }
        }

    }
}
