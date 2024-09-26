<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    protected $table = 'subscribes';
    protected $fillable = ['name', 'price'];

    public function permissions()
    {
        return $this->morphToMany(Permission::class, 'permissionable');
    }
}
