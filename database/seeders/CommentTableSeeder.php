<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
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
        $users = User::all();
        $models = ['Profile', 'Post', 'Comment'];
        $profileIds = Profile::all()->pluck('id')->toArray();
        $postIds = Post::all()->pluck('id')->toArray();
        $commentIds = Comment::all()->pluck('id')->toArray();
        $commentable_type = array_rand($models);
        if ($commentable_type === 'Profile')
            $commentable_id = array_rand($profileIds);
        elseif ($commentable_type === 'Post')
            $commentable_id = array_rand($postIds);
        elseif ($commentable_type === 'Comment')
            $commentable_id = array_rand($commentIds);
        else{
            $commentable_type = 'Post';
            $commentable_id = array_rand($postIds);
        }
        foreach ($users as $user) {
            Comment::create([
                'user_id' => $user->id,
                'commentable_type' => $commentable_type,
                'commentable_id' => $commentable_id,
                'text' => $faker->text,
                'status' => 'تایید شده',
                'score' => random_int(1, 5),
            ]);
        }
    }
}
