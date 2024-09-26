<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'role_id',
        'img',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function adcategories()
    {
        return $this->hasMany(AdCategory::class);
    }


    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function adImages()
    {
        return $this->hasMany(AdImage::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function subActivities()
    {
        return $this->hasMany(SubActivity::class);
    }
    public function socialMedias()
    {
        return $this->hasMany(SocialMedia::class);
    }
    public function technicalDegrees()
    {
        return $this->hasMany(TechnicalDegree::class);
    }
    public function confirmations()
    {
        return $this->hasMany(Confirmation::class);
    }
    public function exampleWorks()
    {
        return $this->hasMany(ExampleWork::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function tenderPrices()
    {
        return $this->hasMany(TenderPrice::class);
    }

    public function tenders()
    {
        return $this->hasMany(Tender::class);
    }
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function upgrades()
    {
        return $this->hasMany(Upgrade::class);
    }

    public function adUpgrades()
    {
        return $this->hasMany(AdUpgrade::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }
}