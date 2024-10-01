<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';
    protected $fillable = ['user_id', 'likeable_type', 'likeable_id', 'like_type'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function likeable()
    {
        return $this->morphTo();
    }
}
