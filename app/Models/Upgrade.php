<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model
{
    use HasFactory;

    protected $table = 'upgrades';
    protected $fillable = ['user_id', 'title', 'price', 'showNumber'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ads()
    {
        return $this->belongsToMany(Ad::class);
    }
}
