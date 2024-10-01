<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = ['name'];

    CONST CREATED_AT = null;

    CONST UPDATED_AT = null;

    public function permissions()
    {
        return $this->morphToMany(Permission::class, 'permissionable', Relationship::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
