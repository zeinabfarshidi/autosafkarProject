<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $table = 'tenders';
    protected $fillable = ['user_id', 'order_id', 'tender_price_id', 'expired_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
