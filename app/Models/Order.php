<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'ad_id',
        'problem',
        'description',
        'img'
    ];

    public function persiannameOfTheModel()
    {
        return 'سفارشات';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }

    public function tender()
    {
        return $this->hasOne(Tender::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function cooperation()
    {
        return $this->hasOne(Cooperation::class);
    }
}
