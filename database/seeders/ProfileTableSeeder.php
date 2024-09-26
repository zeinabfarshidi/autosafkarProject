<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Profile;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Profile::count())
            $this->data();
    }

    private function data()
    {
        foreach (User::all() as $user) {
            Profile::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
