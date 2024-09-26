<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    protected $fillable = [
        'user_id',
        'ad_category_id',
        'workTime',
        'state_id',
        'city_id',
        'area_id',
        'description',
        'myDistinction'
    ];

    public function persiannameOfTheModel()
    {
        return 'پروفایل کاربران';
    }

    public function modelTitle()
    {
        return 'پروفایل ' . $this->user->name;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adCategory()
    {
        return $this->belongsTo(AdCategory::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tickets()
    {
        return $this->morphMany(Ticket::class, 'ticketable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
