<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::count())
            $this->data();
    }

    private function data()
    {
        for ($i = 1; $i < 10; $i++) {
            User::create([
                'name' => "User $i",
                'email' => "user$i@mail.com",
                'password' => Hash::make('12345678'),
                'role_id' => $i,
                'thumbnail_id'=>$i,
                'phone' => "0912345678" . $i,
                'ref_code'=>'123456789' . $i,
                'wallet'=>'123456789' . $i,
                'points'=>'123456789' . $i,
            ]);
        }
    }


}
