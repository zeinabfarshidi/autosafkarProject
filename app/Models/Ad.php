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

    //ابطه پلی مورفیک با یک به چند با ExtraData
}
