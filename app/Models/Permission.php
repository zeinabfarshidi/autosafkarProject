<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    protected $fillable = ['section', 'sectionName', 'operation', 'operationName'];

    public function roles()
    {
        return $this->morphedByMany(Role::class, 'permissionable');
    }

    public function subscribes()
    {
        return $this->morphedByMany(Subscribe::class, 'permissionable');
    }

    public function store($section, $sectionName)
    {
        $operations = [
            ['operation' => 'create', 'operationName' => 'ایجاد'],
            ['operation' => 'update', 'operationName' => 'ویرایش'],
            ['operation' => 'view', 'operationName' => 'مشاهده'],
            ['operation' => 'delete', 'operationName' => 'حذف'],
        ];
        foreach ($operations as $operation){
            $permission = Permission::where('section', $section)
                ->where('operation', $operation['operation'])->first();
            if (!$permission){
                Permission::create([
                    'section'=>$section,
                    'sectionName'=>$sectionName,
                    'operation'=>$operation['operation'],
                    'operationName'=>$operation['operationName'],
                ]);
            }
        }
    }
}
