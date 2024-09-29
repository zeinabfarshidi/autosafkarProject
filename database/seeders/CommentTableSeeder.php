<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Comment::count())
            $this->data();
    }

    private function data()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 10; $i++){
            Comment::create([
                'user_id'=>$i,
                'content'=>$faker->text,
                'rate'=>$i,
                'comment_status'=>$faker->text,
            ]);
        }
    }
}
