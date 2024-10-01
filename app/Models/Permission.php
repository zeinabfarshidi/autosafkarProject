<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    protected $fillable = ['name'];

    public $timestamps = false;

    public function categories()
    {
        return $this->morphToMany('App\Category', 'categorizable');
    }

    public function roles()
    {
        return $this->morphedByMany(Role::class, 'permissionable', Relationship::class);
    }
}
