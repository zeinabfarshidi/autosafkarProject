<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $item){
            $role = Role::create($item);
        }
        Permission::store('role', 'سطوح کاربری');
    }

    public function data()
    {
        return [
            ['name'=>'مدیر', 'latinName'=>'admin'],
            ['name'=>'نویسنده', 'latinName'=>'author'],
            ['name'=>'حسابدار', 'latinName'=>'accountant'],
        ];
    }
}
