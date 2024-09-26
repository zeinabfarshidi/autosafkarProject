<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';
    protected $fillable = ['user_id', 'name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
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
