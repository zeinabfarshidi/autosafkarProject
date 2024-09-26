<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ads';
    protected $fillable = [
        'user_id',
        'ad_category_id',
        'state_id',
        'city_id',
        'area_id',
        'title',
        'mobile',
        'minPrice',
        'maxPrice',
        'description',
        'views',
        'status',
        'showNumber',
    ];

    public function persiannameOfTheModel()
    {
        return 'آگهی ها';
    }

    public function modelTitle()
    {
        return $this->title;
    }

    public function created_at_difference()
    {
        Carbon::setLocale('fa');
        return Carbon::parse($this->created_at)->diffForHumans();
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

    public function adImages()
    {
        return $this->hasMany(AdImage::class);
    }

    public function getIsUserLikedAttribute()
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function upgrades()
    {
        return $this->belongsToMany(Upgrade::class);
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
