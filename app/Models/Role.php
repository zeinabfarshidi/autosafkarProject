<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'roles';
    protected $fillable = ['name', 'latinName'];

    public function persiannameOfTheModel()
    {
        return 'سطوح دسترسی';
    }

    public function modelTitle()
    {
        return $this->name;
    }

    public function permissions()
    {
        return $this->morphToMany(Permission::class, 'permissionable');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
