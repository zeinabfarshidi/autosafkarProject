<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = ['user_id', 'state_id', 'name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
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
