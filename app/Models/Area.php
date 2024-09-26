<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $fillable = ['user_id', 'city_id', 'name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
