<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ads';
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'phone',
        'address',
        'geo_id',
        'lat',
        'logn',
        'fixed_phone',
        'ad_type',
        'price',
        'max_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function extra_datas()
    {
        return $this->morphMany(ExtraData::class, 'extra_dataable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'ad', 'id');
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'commentable');
    }
}
