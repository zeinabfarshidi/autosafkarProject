<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperation extends Model
{
    use HasFactory;

    protected $table = 'cooperations';
    protected $fillable = [
        'user_id',
        'order_id',
        'offer_id',
        'do',
        'delay',
        'result',
        'opinion'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
