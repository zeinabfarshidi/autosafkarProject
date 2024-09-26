<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ExampleWork;
use App\Models\Permission;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Post::count())
            $this->data();
        Permission::store('post', 'مقالات');
    }

    private function data()
    {
        $faker = Factory::create();
        foreach (User::all() as $user) {
            $post = Post::create([
                'user_id' => $user->id,
                'title' => $faker->title,
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'text' => $faker->text,
            ]);
            $category = Category::all()->random();
            $post->categories()->attach($category);
        }
    }
}
