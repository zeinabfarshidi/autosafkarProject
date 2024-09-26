<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::count())
            $this->data();
        Permission::store('user', 'کاربران');
    }

    private function data()
    {
        $faker = Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            if ($i == 1)
                $role_id = Role::find($i)->id;
            else
                $role_id = Role::all()->random()->id;
            User::create([
                'name' => $faker->name,
                'email' => 'user' . $i . '@gmail.com',
                'mobile' => '0910200122' . $i,
                'role_id' => $role_id,
                'password' => bcrypt('12345678')
            ]);
        }
    }
}
