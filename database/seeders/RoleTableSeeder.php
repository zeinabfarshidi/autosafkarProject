<?php

namespace Database\Seeders;

use App\Models\Relationship;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Role::count()){
            foreach ($this->data() as $role){
                Role::create([
                    'name'=>$role,
                ]);
            }
        }
    }
    private function data()
    {
        return ['admin', 'author', 'accountant'];
    }
}
