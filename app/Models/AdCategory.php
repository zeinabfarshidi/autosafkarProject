<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ad_categories';
    protected $fillable = [
        'user_id',
        'ad_category_id',
        'name',
        'latinName',
        'img',
        'description',
    ];

    public function persiannameOfTheModel()
    {
        return 'دسته بندی آگهی ها';
    }

    public function modelTitle()
    {
        return $this->name;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(AdCategory::class, 'ad_category_id');
    }

    public function children()
    {
        return $this->hasMany(AdCategory::class, 'ad_category_id');
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
